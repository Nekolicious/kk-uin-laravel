<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::all()->where('is_approve', null)->where('is_approve', 0);
        return view('dashboard.user.approve', ['users'=>$users]);
    }

    public function users()
    {
        $users = User::all()->where('is_approve', 1);
        return view('dashboard.user.users', ['users'=>$users]);
    }

    public function admins()
    {
        $users = User::all()->where('is_admin', 1);
        return view('dashboard.user.admins', ['users'=>$users]);
    }

    public function grant(Request $request)
    {
        $userdata = User::where('user_id', $request->user_id);
        try {
            $userdata->update([
                'is_admin' => 1,
            ]);
            return redirect()->route('dashboard.usermgmt.users')->with('success', 'Berhasil memberi akses admin pada user tersebut.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.users')->withErrors(['error' => 'Terjadi error saat akan memberi izin admin user tersebut.']);
        }
    }

    public function revoke(Request $request)
    {
        $userdata = User::where('user_id', $request->user_id);
        try {
            $userdata->update([
                'is_admin' => 0,
            ]);
            return redirect()->route('dashboard.usermgmt.admins')->with('success', 'Akses admin user tersebut berhasil dilepas.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.admins')->withErrors(['error' => 'Terjadi error saat akan menghapus izin admin user tersebut.']);
        }
    }

    public function approve(Request $request)
    {
        $userdata = User::where('user_id', $request->user_id);
        try {
            $userdata->update([
                'is_approve' => 1,
            ]);
            return redirect()->route('dashboard.usermgmt.pending')->with('success', 'User tersebut telah disetujui.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.pending')->withErrors(['error' => 'Terjadi error saat akan menyetujui user tersebut.']);
        }
    }
    
    public function decline(Request $request)
    {
        $userdata = User::where('user_id', $request->user_id);
        try {
            $userdata->delete();
            return redirect()->route('dashboard.usermgmt.pending')->with('success', 'User tersebut telah ditolak.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.pending')->withErrors(['error' => 'Terjadi error saat akan menolak user tersebut.']);
        }
    }
}
