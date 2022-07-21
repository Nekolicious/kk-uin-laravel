<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index() {
        return view('landing.landing');
    }

    public function roadmap() {
        return view('roadmap.roadmap');
    }

    public function artikel($slug) {
        $data = Artikel::all();
        $imgdata = $pathdata = File::glob('uploads/img'.'/*');
        return view('artikel.artikel', []);
    }
    
    public function kk() {
        return view('kk.kk');
    }
}
