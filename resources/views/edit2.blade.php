@extends('master')

@section('title', 'Data Buku')

@section('konten')
	<h3>Edit Buku</h3>

	<a href="/buku" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $p)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodebuku }}"> <br/>
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Buku</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" required="required" id="merkbuku" name="merkbuku" placeholder="Masukan Merk Buku" value="{{ $p->merkbuku }}">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Buku</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="stockbuku" name="stockbuku" placeholder="Masukan Stock Buku" value="{{ $p->stockbuku }}" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-1 control-label">Ketersediaan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="1">
                    <label class="form-check-label" for="tersedia">Ya</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                    <label class="form-check-label" for="taktersedia">Tidak</label>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
	@endsection
