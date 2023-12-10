<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
	public function index5()
	{
		//$pegawai = DB::table('pegawai')->get();
		$buku = DB::table('buku')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index5',['buku' => $buku]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah3()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('buku')->insert([
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/buku');

	}

	// method untuk edit data pegawai
	public function edit2($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$buku = DB::table('buku')->where('kodebuku',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit2',['buku' => $buku]);

	}


	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('buku')->where('kodebuku',$request->id)->update([
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/buku');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('buku')->where('kodebuku',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/buku');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$buku = DB::table('buku')
					->where('merkbuku','like',"%".$cari."%")
                    ->orderBy('merkbuku', 'asc')
					->paginate();

    		// mengirim data pegawai ke view index
		return view('index5',['buku' => $buku, 'cari' => $cari]);

	}

    public function view2($id){
        // mengambil data dari table pegawai sesuai id
        $buku = DB::table('buku')
        ->where('kodebuku', $id)
        ->get();

        return view('view2', ['buku' => $buku]);
    }

}
