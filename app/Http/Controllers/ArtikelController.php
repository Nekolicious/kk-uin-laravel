<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function create() {
        return view('dashboard.artikel.create');
    }

    public function store(Request $request) {
        $request->validate([
            'inputTitle'=>'required',
            'inputHeader'=>'required',
            'wysiwyg'=>'required',
            'inputKategori'=>'required',
        ]);
    }
    
    public function show() {
        $data = Artikel::all();
        return view('dashboard.artikel.show', ['data'=>$data]);
    }

    public function edit($id) {
        $data = Artikel::all()->where('artikel_id', $id);
        return view('dashboard.artikel.edit', ['data'=>$data]);
    }

    // public function update() {
        
    // }

    // public function delete() {

    // }
}
