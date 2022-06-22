@extends('layouts.main')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Galeri</h1>
      </div>
    </div>
  </div>
</div>

@section('content')
<div class="container" style="background-color: white; padding: 10px 10px">
  <div class="card">
    <form method="POST" action="{{ route('galeri.update', ['id' => $galeri->id]) }}">
      <div class="card">
        <div class="card-header">
          <h4>Form Edit Data Galeri {{$galeri->nama}}</h4>
          <div class="card-header-form">
          </div>
        </div>
        <div class="card-body">
          @csrf
          <input name="_method" type="hidden" value="PATCH">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Nama Ukuran</label>
                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Ukuran"
                  value="{{$galeri->nama}}">
              </div>
              <div class="form-group">
                <label for="name">Ukuran (Inch)</label>
                <input id="ukuran" type="text" class="form-control" name="ukuran" placeholder="Telepon"
                  value="{{$galeri->ukuran}}">
              </div>
              <button type="submit" class="btn btn-primary btn-lg" tabindex="4" style="border-radius: 10px;">
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
@endsection