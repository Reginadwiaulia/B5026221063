@extends('master')

@section('title', 'Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">namalengkap</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan namalengkap">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">divisi</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan divisi">
            </div>
        </div>

        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">departemen</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan departemen">
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
