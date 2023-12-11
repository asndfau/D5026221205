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
            <form action="/pegawai/edit" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

                <div class="form-group row">
                    <label for="nama"  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jabatan"  class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur"  class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat"  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" required="required" name="alamat" readonly>{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>

                <a href="/librarian" class="btn btn-primary">OK</a>
            </form>
          </div>
        </div>
      </div>
      <br>
    @endforeach
@endsection
