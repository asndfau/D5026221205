@extends('master2')
@section('title', 'Database Nilai')

@section('judul_halaman')
    <h3>Data Nilai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>
    <br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td
            @if ($p->pegawai_umur <= 40)
            class="bg-dark text-light"
            @elseif ($p->pegawai_umur >= 31)
            class="bg-danger text-light"
            @endif></td>
            <td></td>
		</tr>
		@endforeach
	</table>
@endsection


