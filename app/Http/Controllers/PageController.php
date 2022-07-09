<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landing.landing');
    }

    public function roadmap()
    {
        return view('roadmap.roadmap');
    }
    
    public function kk()
    {
        return view('kk.kk');
    }
}
