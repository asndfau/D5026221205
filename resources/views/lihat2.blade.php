@extends('master2')
@section('title', 'View Data Pegawai')

@section('konten')
    <h2>Detail Pegawai</h2>
    @foreach ($pegawai as $p)
    <div class="container">
        <div class="row">
          <div class="col border-right">

          </div>
          <div class="col">
            <ul>
                <li>{{ $p->pegawai_nama }}</li>
                <li>{{ $p->pegawai_jabatan }}</li>
                <li>{{ $p->pegawai_umur }}</li>
                <li>{{ $p->pegawai_alamat }}</li>
            </ul>
            <a href="/pegawai" class="btn btn-primary">OK</a>
          </div>
        </div>
      </div>
      <br>
    @endforeach
@endsection
