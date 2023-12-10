@extends('master2')

@section('konten')
    <h3>Data sepatu</h3>

    <a href="/sepatu"> Kembali</a>

    <br/>
    <br/>

    <form action="/sepatu/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label">Merk </label>
            <div class="col-sm-8">
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Merk sepatu">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label">Stok </label>
            <div class="col-sm-8">
                <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukkan Stok sepatu">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label">Ketersediaan </label>
            <div class="col-sm-8">
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat sepatu"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>

    </form>

@endsection
