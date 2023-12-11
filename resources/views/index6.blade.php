@extends('master')

@section('title', 'Data Karyawan')

@section('konten')
@php
    function translateChar($char){
        if($char==1){
            return 'Ya';
        }
        else if($char==0){
            return 'Tidak';
        }
        else{
            return 'Tidak Valid';
        }
    }
@endphp
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Data Karyawan Baru</a>

	<br/>
	<p>Cari Data Karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>nama lengkap</th>
			<th>divisi </th>
			<th>DEPARTEMEN</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
            <td>{{ $p->departemen }}</td>
			<td>{{  translateChar($p->tersedia) }}</td>
			<td>
				<a href="/karyawan/view3/{{ $p->kodepegawai }}" class="btn btn-success">View</a>
				|
				<a href="/karyawan/edit3/{{ $p->kodepegawai }}" class="btn btn-warning">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $karyawan->links() }}
@endsection
