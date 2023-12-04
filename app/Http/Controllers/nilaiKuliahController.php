<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiKuliahController extends Controller
{
    public function indexpraeas()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('indexpraeas',['nilaikuliah' => $nilaikuliah]);

    }
}
