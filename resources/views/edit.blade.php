@extends('master2')
@section('title', 'View Data Pegawai')

@section('konten')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
	</form>
	@endforeach


 @endsection

