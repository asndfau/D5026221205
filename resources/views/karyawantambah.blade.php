@extends('master2')

@section('konten')
    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br/>
    <br/>

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="kode" class="col-sm-2 control-label">Kode Pegawai </label>
            <div class="col-sm-8">
                <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label">Nama Lengkap </label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 control-label">Divisi </label>
            <div class="col-sm-8">
                <input type="text" name="divisi" class="form-control" id="divisi" placeholder="Masukkan Divisi">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 control-label">Departemen </label>
            <div class="col-sm-8">
                <input type="text" name="divisi" class="form-control" id="departemen" placeholder="Masukkan Departemen">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>

@endsection
