<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(){
        $data['title'] = "Register";
        return view('user/register', $data);
    }

    public function register_action(Request $request){
        $request->validate([
            'name'=>'required',
            'nipnim'=>'required|unique:users',
            'email'=>'required|unique:users',
            'notelp'=>'required',
            'kk'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'nipnim' => $request->nipnim,
            'email' => $request->email,
            'notelp'=>$request->notelp,
            'kk'=>$request->kk,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('register_success')->with('success', 'Registrasi Berhasil. Silahkan masuk');
    }
}
