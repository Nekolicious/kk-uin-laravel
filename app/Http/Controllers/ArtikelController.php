<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

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

    public function insert() {
        
    }
    
    public function show() {
        $data = DB::table('artikel')->get();
        return view('dashboard.artikel.show', ['data'=>$data]);
    }

    public function edit($id) {
        $data = DB::table('artikel')->where('artikel_id', $id)->get();
        return view('dashboard.artikel.edit', ['data'=>$data]);
    }

    // public function update() {
        
    // }

    // public function delete() {

    // }
}
