<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table nilaikuliah
		// $pegawai = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
		return view('index',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambah()
	{

		// memanggil view tambah
		return view('add');

	}

	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilai');

	}

    // method untuk lihat data nilaikuliah
	public function view($id)
	{
		// mengambil data nilaikuliah berdasarkan id yang dipilih
		$nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('lihat',['nilaikuliah' => $nilaikuliah]);

	}
}
