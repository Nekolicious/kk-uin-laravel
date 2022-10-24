<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KK;

class KKController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function show() {
        $data = KK::all();
        return view('dashboard.kk.kk', compact('data'));
    }

    // public function store(Request $request) {
    //     $request->validate([
            
    //     ])
    // }
}
