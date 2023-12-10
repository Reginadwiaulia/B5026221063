@extends('master')

@section('title', 'Data Buku')

@section('konten')

	<h3>Data Buku</h3>

	<a href="/buku" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/buku/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Buku</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="merkbuku" name="merkbuku" placeholder="Masukan Merk Buku">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Buku</label>
            <div class="col-sm-8">
            <input type="Number" class="form-control" id="stockbuku" name="stockbuku" placeholder="Masukan Stock Buku">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-1 control-label">Ketersediaan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="yatersedia" value="1">
                    <label class="form-check-label" for="yatersedia">Ya</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                    <label class="form-check-label" for="taktersedia">Tidak</label>
                </div>
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
