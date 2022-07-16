<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'nama'=>'required',
        ]);
        $kategori = new Kategori([
            'nama'=>$request->nama,
        ]);
        $kategori->save();
        return redirect()->route('dashboard.kategori');
    }

    public function show() {
        $data = Kategori::all();
        return view('dashboard.kategori.kategori', ['data'=>$data]);
    }

    public function update() {
        
    }

    public function delete() {

    }
}
