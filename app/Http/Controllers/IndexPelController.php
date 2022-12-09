<?php

namespace App\Http\Controllers;

use App\Models\Lokerja;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexPelController extends Controller
{
    public function cbindex(){
        // $loker= DB::table('lokerja')
        // ->join('perusahaan', 'lokerja.email', '=', 'perusahaan.email')->select('lokerja.*', 'perusahaan.nama')
        // ->get();
        $loker = lokerja::orderBy('updated_at','desc')->get();
        return view('cbindex', [
            'lokers' => $loker
        ]);
    }
}
