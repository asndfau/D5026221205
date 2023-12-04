{{-- @extends('master2')
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
			<td
            @if ($p->pegawai_umur <= 30)
            class="bg-dark text-light"
            @elseif ($p->pegawai_umur >= 31)
            class="bg-danger text-light"
            @endif
            >{{ $p->pegawai_umur }}</td>
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
 --}}

 @extends('master2')
@section('judulhalaman', 'Data Nilai')

@section('konten')
    <br>
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilai/add" class="btn btn-primary"> + Tambah Nilai</a>
    <br>
    <br>

    <table class="table table-stripped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilaikuliah as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>
                @if ($n->NilaiAngka <= 40)
                D
                @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                C
                @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                B
                @elseif ($n->NilaiAngka >= 81)
                A
                @endif
            </td>
            <td>
                {{$n->NilaiAngka*$n->SKS}}
            </td>
        </tr>
        @endforeach
    </table>

@endsection
