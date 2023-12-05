@extends('master')

@section('title', 'Data Keranjang Belanja')

@section('konten')

	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Kode Pembelian</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan ID Belanja">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">KodeBarang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan KodeBarang">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">JumlahPembelian</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukan umur pegawai">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Hargaperitem</label>
            <div class="col-sm-8">
            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat pegawai"></textarea>
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
