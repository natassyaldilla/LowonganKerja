<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function perusahaan(){
        return view('perusahaan');
    }
}
