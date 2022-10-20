<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPelController extends Controller
{
    public function cbindex(){
        return view('cbindex');
    }
}
