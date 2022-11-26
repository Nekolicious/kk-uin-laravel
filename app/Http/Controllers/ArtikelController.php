<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class ArtikelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('dashboard.artikel.create', ['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        if (Artikel::where('slug', $request->slug)->exists()) {
            for ($i = 2; Artikel::where('slug', $request->slug)->exists(); $i++) {
                $request->merge([
                    'slug' => Str::slug($request->title) . '-' . $i,
                ]);
            }
        } else if (empty($request->input('slug'))) {
            $request->merge([
                'slug' => Str::slug($request->title),
            ]);
        }

        // // 
        // $content = $request->content;
        // $dom = new \DOMDocument();
        // $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        // $imageFile = $dom->getElementsByTagName('imageFile');

        // foreach ($imageFile as $item => $image) {
        //     $data = $img->getAttribute('src');
        //     list($type, $data) = explode(';', $data);
        //     list(, $data) = explode(',', $data);
        //     $imageData = base64_decode($data);
        //     $image_name = "/uploads/img/".time().$item.'.png';
        //     $path = public_path('uplodads').'/img/'.$image_name;
        //     file_put_contents($path, $imageData);

        //     $image->removeAttribute('src');
        //     $image->setAttribute('src',$image_name);
        // }

        // $content = $dom->saveHTML();
        // // 

        $artikel = new Artikel([
            'title' => $request->title,
            'body' => $request->body,
            'kategori_id' => $request->kategori_id,
            'author_id' => $request->author_id,
            'slug' => $request->slug,
        ]);

        if ($request->hasFile('image')) {
            $path = 'public/img';
            $file = $request->file('image');
            $filename = date('YmdHi');
            $file->storeAs($path, $filename);
            $artikel['header'] = $filename;
        }

        $artikel->save();
        return redirect()->route('dashboard.artikel');
    }

    public function show()
    {
        $data = Artikel::all();
        return view('dashboard.artikel.show', compact('data'));
    }

    public function edit($id)
    {
        $kategori = Kategori::all();
        $data = Artikel::all()->where('artikel_id', $id);
        return view('dashboard.artikel.edit', ['data' => $data, 'kategori' => $kategori]);
    }

    public function update(Request $request)
    {
        $data = Artikel::where('artikel_id', $request->artikel_id);

        if (Artikel::where('slug', $request->slug)->exists()) {
            try {
                $data->update(['slug' => Str::slug($request->slug)]);
            } catch (\Throwable $th) {
                error_log($th);
                return back()->withErrors('Permalink tersebut sudah digunakan.');
            }
        }

        if (!(Artikel::where('kategori_id', $request->kategori_id)) === ($data->where('kategori_id', $request->kategori_id))) {
            $data->update(['kategori_id' => $request->kategori_id]);
        }

        if (!isEmpty($request->image)) {
            $path = 'public/img';
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->storeAs($path, $filename);
            $data->update(['header' => $request->$filename]);
        }

        $data->update([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
        ]);

        return redirect()->route('dashboard.artikel')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function delete(Request $request)
    {
        Artikel::where('artikel_id', $request->artikel_id)->delete();
        return redirect()->route('dashboard.artikel');
    }
}
