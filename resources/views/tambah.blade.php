@extends('master2')

@section('konten')
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br/>
    <br/>

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label">Nama </label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan </label>
            <div class="col-sm-8">
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label">Umur </label>
            <div class="col-sm-8">
                <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukkan Umur Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label">Alamat </label>
            <div class="col-sm-8">
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Pegawai"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>

    </form>

@endsection
