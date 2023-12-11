<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index6()
	{
    	// mengambil data dari table pegawai
        $karyawan = DB::table('karyawan')->get();
    	// mengirim data pegawai ke view index
		return view('index6',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah4()
	{

		// memanggil view tambah
		return view('tambah4');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
{
    // Melakukan validasi input
    $request->validate([
        'kodepegawai' => 'required|unique:karyawan,kodepegawai|max:255',
        'namalengkap' => 'required',
        'divisi' => 'required',
        'departemen' => 'required',
    ], [
        'kodepegawai.unique' => 'Kode Pegawai sudah ada.',
    ]);

    // insert data ke table karyawan
    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => strtoupper($request->namalengkap), // Namalengkap dalam huruf kapital
        'divisi' => $request->divisi,
        'departemen' => strtolower($request->departemen), // Departemen dalam huruf kecil
    ]);

    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan');
}

	// method untuk hapus data pegawai
	public function hapus($kodepegawai)
	{
		// menghapus data pegawai berdasarkan id yang akan dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
}
