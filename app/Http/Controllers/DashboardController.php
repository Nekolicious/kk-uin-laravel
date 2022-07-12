<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        return view('dashboard.overview');
    }

    public function pendinguser()
    {
        return view('dashboard.approve');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    public function admins()
    {
        return view('dashboard.admins');
    }
}
