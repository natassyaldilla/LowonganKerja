<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        // echo 'test';
        $credentials = $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ])
        // dd($request->all())
        ;

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/cbindex');
        }
        return back()->with('loginError', 'Login Failed');
    }
}
