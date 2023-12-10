@extends('master')

@section('title', 'Data Buku')

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
	<h3>Data Buku</h3>

	<a href="/buku/tambah" class="btn btn-primary"> + Tambah Buku Baru</a>

	<br/>
	<p>Cari Data Buku :</p>
	<form action="/buku/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Buku .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Buku</th>
			<th>Merk Buku</th>
			<th>Stock Buku</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($buku as $p)
		<tr>
			<td>{{ $p->kodebuku }}</td>
			<td>{{ $p->merkbuku }}</td>
			<td>{{ $p->stockbuku }}</td>
			<td>{{  translateChar($p->tersedia) }}</td>
			<td>
				<a href="/buku/view2/{{ $p->kodebuku }}" class="btn btn-success">View</a>
				|
				<a href="/buku/edit2/{{ $p->kodebuku }}" class="btn btn-warning">Edit</a>
				|
				<a href="/buku/hapus/{{ $p->kodebuku }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $buku->links() }}
@endsection
