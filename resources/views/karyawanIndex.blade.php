@extends('master2')
@section('title', 'Database Sepeda')

@section('judul_halaman')
    <h3>Data Kayawan</h3>
@endsection

@section('konten')
    {{-- <form action="/sepatu/cari" method="GET" class="form-inline">
        <div class="input-group">
            <input class="form-control mr-2" type="text" name="cari" placeholder="Cari Sepatu" value="{{ old('cari') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">CARI</button>
            </div>
        </div>
    </form> --}}

    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Delete</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi}}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/karyawan/tambah/" class="btn btn-primary">Tambah Data</a>
@endsection
