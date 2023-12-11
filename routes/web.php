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
	return view('index2');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('academic', function () {
    return view('academic');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('5026221063', function () {
    return view('5026221063');
});

Route::get('link', function () {
    return view('link');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('view', function () {
    return view('view');
});

Route::get('index3', function () {
    return view('index3');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam') ;
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

//route CRUD nilai
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index4');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiKuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

// Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangController@index3');
Route::get('/keranjangbelanja/beli', 'App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/buku','App\Http\Controllers\BukuController@index5');
Route::get('/buku/tambah','App\Http\Controllers\BukuController@tambah3');
Route::post('/buku/store','App\Http\Controllers\BukuController@store');
Route::get('/buku/edit2/{id}','App\Http\Controllers\BukuController@edit2');
Route::post('/buku/update','App\Http\Controllers\BukuController@update');
Route::get('/buku/hapus/{id}','App\Http\Controllers\BukuController@hapus');
Route::get('/buku/cari','App\Http\Controllers\BukuController@cari');
Route::get('/buku/view2/{id}','App\Http\Controllers\BukuController@view2');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index6');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah4');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/edit3/{id}','App\Http\Controllers\KaryawanController@edit3');
Route::post('/karyawan/update','App\Http\Controllers\KaryawanController@update');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
Route::get('/karyawan/cari','App\Http\Controllers\KaryawanController@cari');
Route::get('/karyawan/view3/{id}','App\Http\Controllers\KaryawanController@view3');
