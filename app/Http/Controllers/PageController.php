<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KK;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index() {
        $artikel = Artikel::paginate(12);
        $kk = KK::paginate(4);
        return view('landing.landing', ['artikel'=>$artikel, 'kk'=>$kk]);
    }

    public function roadmap() {
        return view('roadmap.roadmap');
    }

    public function artikel($slug) {
        $data = Artikel::all()->where('slug', $slug);
        if(Artikel::where('slug', $slug)->exists()) {
            return view('artikel.artikel', ['data'=>$data]);
        } else {
            $message = 'Artikel tidak ditemukan, mungkin telah dihapus atau dipindahkan.';
            return view('artikel.artikel')->with('message', $message);
        }
        
    }
    
    public function kk() {
        return view('kk.kk');
    }
}
