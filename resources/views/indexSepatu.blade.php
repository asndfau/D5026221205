@extends('master2')
@section('title', 'Database Sepeda')

@section('judul_halaman')
    <h3>Data Sepatu</h3>

    <a href="/sepatu/tambah"> + Tambah Sepatu Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <form action="/sepatu/cari" method="GET" class="form-inline">
        <div class="input-group">
            <input class="form-control mr-2" type="text" name="cari" placeholder="Cari Sepatu" value="{{ old('cari') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">CARI</button>
            </div>
        </div>
    </form>

    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Sepatu</th>
            <th>Merk Sepatu</th>
            <th>Stock Sepatu</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepatu as $p)
            <tr>
                <td>{{ $p->kodesepatu }}</td>
                <td>{{ $p->merksepatu }}</td>
                <td>{{ $p->stocksepatu }}</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" {{ $p->tersedia === 'Y' ? 'checked' : '' }} id="flexCheckDefault"></td>
                <td>
                    <a href="/sepatu/lihat/{{ $p->kodesepatu }}" class="btn btn-success">View</a>

                    <a href="/sepatu/edit/{{ $p->kodesepatu }}" class="btn btn-warning">Edit</a>

                    <a href="/sepatu/hapus/{{ $p->kodesepatu }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sepatu->links() }}
@endsection
