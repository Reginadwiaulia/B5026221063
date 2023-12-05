@extends('master')

@section('title', 'Data Keranjang Belanja')

@section('konten')

	<h3>Data Keranjang Belanja</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Kode Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Masukan kode barang">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Jumlah Pembelian</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="jumlahpembelian" name="jabatan" placeholder="Masukan jumlah pembelian">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Harga per item</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="hargaperitem" name="hargeperitem" placeholder="Masukan harga per item">
            </div>
        </div>


		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection

