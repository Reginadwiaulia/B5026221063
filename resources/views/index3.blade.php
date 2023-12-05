@extends('master')

@section('title', 'Data Keranjang Belanja')

@section('konten')
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/belibelanja" class="btn btn-primary"> + Beli</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->Kodebarang }}</td>
			<td>{{ $p->pegawai_Jumlah }}</td>
			<td>{{ $p->pegawai_Harga }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
