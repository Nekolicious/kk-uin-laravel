<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GambarController extends Controller
{
    public function show()
    {
        // $img = Artikel::all(columns: ['header']);
        // return view('dashboard.gambar.gambar', ['data' => $img]);
        $pathdata = File::glob('uploads/img'.'/*');
        return view('dashboard.gambar.gambar', ['path'=>$pathdata]);
    }

    public function delete(Request $request)
    {
        try {
            $path = 'public/img/';
            Storage::delete($path . $request->img_name);
            return redirect()->route('dashboard.gambar');
        } catch (\Throwable $th) {
            error_log('Delete Image Error: '.$th);
            return back()->withErrors('Terjadi kesalahan saat penghapusan file.');
        }
    }
}
