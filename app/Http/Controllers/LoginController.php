<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/index');
    }
    public function authenticate(Request $request){
        // echo 'test';
      
        // dd($request->all())
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 'admin'))) {
            $request->session()->regenerate();
            return redirect('/admin');
        } if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 'pelamar'))) {
            $request->session()->regenerate();
            return redirect('/cbindex');
        }
        return back()->with('loginError', 'Login Failed')->with('email',$email);
    }
}
