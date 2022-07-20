<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function store(Request $request)
    {
        if (Kategori::where('nama', $request->nama)->exists()) {
            return back()->withErrors(['Data sudah ada.']);
        } else {
            $request->validate([
                'nama' => 'required',
            ]);
            $kategori = new Kategori([
                'nama' => $request->nama,
            ]);
            $kategori->save();
            return redirect()->route('dashboard.kategori');
        }
    }

    public function show()
    {
        $data = Kategori::all();
        return view('dashboard.kategori.kategori', ['data' => $data]);
    }

    public function update(Request $request)
    {
        if (Kategori::where('nama', $request->nama)->exists()) {
            return back()->withErrors(['Data sudah ada.']);
        } else {
            Kategori::where('kategori_id', $request->id)
                ->update([
                    'nama' => $request->nama,
                ]);
            return redirect()->route('dashboard.kategori');
        }
    }

    public function delete(Request $request)
    {
        Kategori::where('kategori_id', $request->id)->delete();
        return redirect()->route('dashboard.kategori');
    }
}
