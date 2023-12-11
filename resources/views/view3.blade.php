@extends('master')

@section('title', 'Data Karyawan')

@section('konten')


    <h2 class="text-center">Data Karyawan</h2><br>

    <a href="/karyawan" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    @foreach ($karyawan as $p)
        {{-- <form action="/karyawan/update" method="post" class="form-horizontal"> --}}
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 400px">
                        <div class="card bg-dark">
                            <div class="card-body text-center">


                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <p class="card-text">Kode Pegawai: {{ $p->kodepegawai }}</p>
                                <p class="card-text">namalengkap: {{ $p->namalengkap }}</p>
                                <p class="card-text">divisi: {{ $p->divisi }}</p>
                                <p class="card-text">departemen: {{ $p->departemen }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
