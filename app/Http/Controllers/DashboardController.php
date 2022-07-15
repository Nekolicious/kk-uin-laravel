<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('users')->get();
        return view('dashboard.approve', ['users'=>$users]);
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('dashboard.users', ['users'=>$users]);
    }

    public function admins()
    {
        $users = DB::table('users')->get();
        return view('dashboard.admins', ['users'=>$users]);
    }
}
