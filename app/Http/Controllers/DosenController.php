<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
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
        return view('dashboard.user.dosen', ['data' => $data]);
    }

    public function grant(Request $request)
    {
        try {
            $dosen = new Dosen([
                'user_id' => $request->user_id,
            ]);
            $dosen->save();
            return redirect()->route('dashboard.usermgmt.users')->with('success', 'Berhasil memberi akses dosen pada user tersebut.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.users')->withErrors(['error' => 'Terjadi error saat akan memberi izin dosen user tersebut.']);
        }
    }

    public function revoke(Request $request)
    {
        $userdata = Dosen::where('user_id', $request->user_id);
        try {
            $userdata->delete();
            return redirect()->route('dashboard.usermgmt.dosen')->with('success', 'User tersebut sudah bukan dosen.');
        } catch (\Throwable $th) {
            error_log($th);
            return redirect()->route('dashboard.usermgmt.dosen')->withErrors(['error' => 'Terjadi error saat akan menghapus izin dosen user tersebut.']);
        }
    }
}
