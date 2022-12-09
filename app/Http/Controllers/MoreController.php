<?php

namespace App\Http\Controllers;

use App\Models\Lokerja;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function more(){
        $id = request('id');
        $loker = Lokerja::find($id);
        $perusahaan = Perusahaan::where('email',$loker->email)->get();
        $nama_perusahaan = $perusahaan[0]->nama;
        return view('more',[
            'loker'=>$loker,
            'nama_perusahaan'=> $nama_perusahaan
        ]);
    }
}
