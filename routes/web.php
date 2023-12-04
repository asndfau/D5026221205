<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p2', function () {
    return view('p2');
});

Route::get('/p3', function () {
    return view('p3');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('perkalian', 'App\Http\Controllers\MahasiswaA@index');

Route::get('show', 'App\Http\Controllers\MahasiswaA@showBlog');

Route::get('/mahasiswa/{nama}', 'App\Http\Controllers\MahasiswaA@showNama');

//membuka form
Route::get('/formulir', 'App\Http\Controllers\MahasiswaA@formulir');

//memproses view
Route::post('/formulir/proses', 'App\Http\Controllers\MahasiswaA@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');

Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');

Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@viewPegawai');

//nilaiKuliah CRUd
Route::get('/nilaiKuliah','App\Http\Controllers\nilaiKuliahController@indexpraeas');
