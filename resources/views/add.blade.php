@extends('master2')
@section('judulhalaman', 'Tambah Nilai')

@section('konten')
    <br>
	<h3>Tambah Nilai</h3>

	<a href="/nilai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/nilai/store" method="post">
		{{ csrf_field() }}
        {{-- NRP --}}
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 control-label">NRP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nrp" name="nrp" required="required">
            </div>
        </div>
        {{-- Nilai Angka --}}
        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-2 control-label">Nilai Angka</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nilaiangka" name="nilaiangka" required="required">
            </div>
        </div>
        {{-- SKS --}}
        <div class="form-group row">
            <label for="sks" class="col-sm-2 control-label">SKS</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="sks" name="sks" required="required">
            </div>
        </div>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>

@endsection
