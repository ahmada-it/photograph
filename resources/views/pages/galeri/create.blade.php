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
    <form method="POST" action="{{route('galeri.store')}}">
      <div class="card">
        <div class="card-header">
          <h4>Form Galeri</h4>
          <div class="card-header-form">
          </div>
        </div>
        <div class="card-body">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Nama Ukuran</label>
                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Ukuran">
              </div>
              <div class="form-group">
                <label for="name">Ukuran (Inch)</label>
                <input id="ukuran" type="text" class="form-control" name="ukuran" placeholder="Ukuran (Inch)">
              </div>
              <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                <i class="fas fa-plus"></i>
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