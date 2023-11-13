<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaA extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h3> Hasil Perkalian : " . (string)$c . "</h3>";
    }

    public function showBlog(){
        $nama = "Hasna";
        $alamat = "Bandung";
        $umur = 20;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);

    }

    public function showNama($nama){
        return "Anda telah mengisikan:" . $nama;
    }

    public function formulir(){
        //cek soal hak ases
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
