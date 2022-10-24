<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\KK;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function show()
    {
        $data = Dosen::all();
        return view('dashboard.dosen.dosen', ['data' => $data]);
    }

    public function create()
    {
        $data = KK::all();
        return view('dashboard.dosen.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kk_id' => 'required',
            'email' => 'required',
            'nip' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $dosen = new Dosen([
            'nama' => $request->nama,
            'kk_id' => $request->kk_id,
            'email' => $request->email,
            'nip' => $request->nip,
        ]);

        if ($request->hasFile('image')) {
            $path = 'public/img';
            $file = $request->file('image');
            $filename = date('YmdHi');
            $file->storeAs($path, $filename);
            $dosen['foto'] = $filename;
        }

        $dosen->save();
        return redirect()->route('dashboard.dosen.dosen');
    }
}
