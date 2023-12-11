@extends('master')

@section('title', 'Data Karyawan')

@section('konten')
	<h3>Edit Karyawan</h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">nama lengkap</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" required="required" id="namalengkap" name="namalengkap" placeholder="Masukan namalengkap" value="{{ $p->namalengkap }}">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">divisi</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="divisi" name="divisi" placeholder="Masukan divisi" value="{{ $p->divisi }}" required="required">
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
