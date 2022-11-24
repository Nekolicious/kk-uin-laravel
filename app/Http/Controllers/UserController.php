<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\KK;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();

        return view('dashboard.users', compact('users'));
    }

    public function register()
    {
        $data = KK::all();
        return view('user.register', ['data' => $data]);
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'nipnim' => 'required|unique:users',
                'email' => 'required|unique:users',
                'notelp' => 'required',
                'kk_id' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
                'status' => 'required',
            ],
            [
                'status.required' => 'The status field is required.'
            ]
        );
        $user = new User([
            'name' => $request->name,
            'nipnim' => $request->nipnim,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'kk_id' => $request->kk_id,
            'password' => Hash::make($request->password),
            'status' => $request->is_admin,
        ]);
        $user->save();
        return redirect()->route('home')->with('success', 'Registrasi Berhasil. Silahkan tunggu konfirmasi dari admin.');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user.master', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'nipnim' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['nipnim' => $request->nipnim, 'password' => $request->password])) {
            if (Auth::user()->is_approve != 1) {
                Auth::logout();
                return back()->withErrors(['unapproved' => 'Akun kamu belum diverifikasi admin.']);
            }
            return redirect()->route('home');
        }
        return back()->withErrors(['password' => 'NIP/NIM atau Password salah!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
