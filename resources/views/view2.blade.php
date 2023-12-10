@extends('master')

@section('title', 'Data Buku')

@section('konten')


    <h2 class="text-center">Data Buku</h2><br>

    <a href="/buku" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    @foreach ($buku as $p)
        {{-- <form action="/buku/update" method="post" class="form-horizontal"> --}}
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
                                <p class="card-text">Kode: {{ $p->kodebuku }}</p>
                                <p class="card-text">Merk: {{ $p->merkbuku }}</p>
                                <p class="card-text">Stock: {{ $p->stockbuku }}</p>
                                <p class="card-text">Tersedia: {{ $p->tersedia }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
