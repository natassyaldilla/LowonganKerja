<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihanController extends Controller
{
    public function pilihan(){
        return view('pilihan');
    }
}