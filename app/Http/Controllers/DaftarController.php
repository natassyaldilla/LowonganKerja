<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar(){
        return view('register');
    }
    public function registerpost(Request $request)
    {
        $valid =  $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'min:3|required',
            'password_confirmation' => 'min:3|required|same:password'
        ]);
        $valid['password'] = bcrypt($request['password']);
        $valid['level'] = "user";
        User::create($valid);
        return redirect('/login')->withSuccess('Selamat anda berhasil terdaftar')->with('email',$valid['email']);;
    }
}
