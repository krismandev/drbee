<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postlogin(Request $request){
        $request->validate([
          'email' => 'required',
          'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email','password'))) {
          return redirect()->route('index_admin');
        }else{
        return redirect()->back()->with('error','Password salah. perikas kembali Email dan Password anda.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return view('welcome');
    }
}
