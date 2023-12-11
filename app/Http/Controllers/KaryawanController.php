<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	// $karyawan = DB::table('karyawan')->get();
        $karyawan = DB::table('karyawan')->paginate();

    	// mengirim data karyawan ke view index
    	return view('karyawanIndex',['karyawan' => $karyawan]);

    }

    public function convertToLowercase($string) {
        $lowercaseString = strtolower($string);
        return $lowercaseString;
    }

    public function convertToUppercase($string) {
        $uppercaseString = strtoupper($string);
        return $uppercaseString;
    }

    // public function viewsepatu($id)
    // {
    //     // mengambil data karyawan berdasarkan id yang dipilih
    //     $karyawan = DB::table('karyawan')->where('kodesepatu',$id)->get();
    //     // passing data karyawan yang didapat ke view edit.blade.php
    //     return view('lihatSepatu',['karyawan' => $karyawan]);

    // }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawantambah');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');

    }

    // // method untuk edit data karyawan
    // public function edit($id)
    // {
    //     // mengambil data karyawan berdasarkan id yang dipilih
    //     $karyawan = DB::table('karyawan')->where('kodesepatu',$id)->get();
    //     // passing data karyawan yang didapat ke view edit.blade.php
    //     return view('edit',['karyawan' => $karyawan]);

    // }

    // // update data karyawan
    // public function update(Request $request)
    // {
    //     // update data karyawan
    //     DB::table('karyawan')->where('kodesepatu',$request->id)->update([
    //         'kodepegawai' => $request->kode,
    //         'namalengkap' => $request->nama,
    //         'divisi' => $request->divisi,
    //         'departemen' => $request->departemen
    //     ]);
    //     // alihkan halaman ke halaman karyawan
    //     return redirect('/karyawan');
    // }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;

    // 		// mengambil data dari table karyawan sesuai pencarian data
	// 	$karyawan = DB::table('karyawan')
	// 	->where('kodepegawai','like',"%".$cari."%")
	// 	->paginate();

    // 		// mengirim data karyawan ke view index
	// 	return view('index',['karyawan' => $karyawan]);

	// }
}


