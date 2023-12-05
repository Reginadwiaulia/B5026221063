<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function index4()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('index4',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{
		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->nrp,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}


}
