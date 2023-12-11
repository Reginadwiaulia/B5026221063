@extends('master')

@section('title', 'Data Karyawan')

@section('konten')

    <h3>Data Karyawan</h3>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" maxlength="5" required="required" class="form-control" placeholder="Masukkan Kode Pegawai" id="kodepegawai" name="kodepegawai">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" required="required" class="form-control" placeholder="Masukkan Nama Lengkap" id="namalengkap" name="namalengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" maxlength="20" required="required" class="form-control" placeholder="Masukkan Divisi" id="divisi" name="divisi">
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" maxlength="20" required="required" class="form-control" placeholder="Masukkan Departemen" id="departemen" name="departemen">
            </div>
        </div>
        <br>

        <!-- Menampilkan ERROR -->
        @if ($errors->has('kodepegawai'))
            <div class="alert alert-danger">
                {{ $errors->first('kodepegawai') }}
            </div>
        @endif
        <div class="text-center">
            <a class="btn btn-warning" href="/karyawan"> Kembali</a>
            <input class="btn btn-success" type="submit" value="SIMPAN">
        </div>
    </form>
@endsection
