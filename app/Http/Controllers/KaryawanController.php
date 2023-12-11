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

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawantambah');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan',
        ]);

        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan

        return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');

    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

}


