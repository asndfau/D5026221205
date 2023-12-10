@extends('master2')
@section('title', 'View Data sepatu')

@section('konten')
    <h2>Detail sepatu</h2>
    @foreach ($sepatu as $p)
    <div class="container">
        <div class="row">
          <div class="col border-right">

          </div>
          <div class="col">
            <form action="/sepatu/edit" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->kodesepatu }}"> <br/>

                <div class="form-group row">
                    <label for="nama"  class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="required" name="nama" value="{{ $p->kodesepatu }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jabatan"  class="col-sm-2 control-label">Merk</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->merksepatu }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur"  class="col-sm-2 control-label">Stock</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" required="required" name="umur" value="{{ $p->stocksepatu }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat"  class="col-sm-2 control-label">Ketersediaan</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" required="required" name="alamat" readonly>{{ $p->tersedia }}</textarea>
                    </div>
                </div>

                <a href="/sepatu" class="btn btn-primary">OK</a>
            </form>
          </div>
        </div>
      </div>
      <br>
    @endforeach
@endsection
