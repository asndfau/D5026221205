@extends('master2')
@section('title', 'View Data Sepatu')

@section('konten')
	<h3>Edit Pegawai</h3>

	<a href="/sepatu"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $p)
	<form action="/sepatu/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodesepatu }}"> <br/>

        <div class="form-group row">
            <label for="nama"  class="col-sm-2 control-label">Merk</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->merksepatu }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur"  class="col-sm-2 control-label">Tersedia</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->tersedia }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan"  class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->tersedia }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
	</form>
	@endforeach


 @endsection

