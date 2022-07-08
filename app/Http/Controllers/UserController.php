<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('user/register');
    }

    public function register_action(Request $request){
        $request->validate([
            'name'=>'required',
            'nipnim'=>'required|unique:users',
            'email'=>'required|unique:users',
            'hp_number'=>'required',
            'category_kk'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'nipnim' => $request->nipnim,
            'email' => $request->email,
            'hp_number'=>$request->hp_number,
            'category_kk'=>$request->category_kk,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silahkan masuk');
    }
}
