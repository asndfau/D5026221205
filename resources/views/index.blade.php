@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>
    <br/>
@endsection

@section('konten')
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama .." value="{{ old('cari') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/lihat/{{ $p->pegawai_id }}" class="btn btn-success">View</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links()}}
@endsection

