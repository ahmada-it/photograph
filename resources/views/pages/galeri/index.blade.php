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
    <div class="card-header">
      <a href="#" class="btn btn-primary" target="_blank" style="border-radius: 10px;">Report</a>
      <a href="{{route("galeri.create")}}" class="ml-1 btn btn-primary" style="border-radius: 10px;">Tambah Data</a>
    </div>
    <table id="bootstrap-data-table-export" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Ukuran</th>
          <th>Ukuran (cm)</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
        @endphp
        @forelse ($galeris as $item)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->ukuran}}</td>
          <td>
            <a href="{{route('galeri.edit', ['id' => $item->id])}}" class="btn btn-warning"
              style="border-radius: 10px;">Edit</a>
            <a href="{{route('galeri.delete', ['id' => $item->id])}}" class="ml-1 btn btn-danger"
              style="border-radius: 10px;">Hapus</a>
          </td>
          @empty
        <tr>
          <td colspan="6" class="text-center">
            <h5>Data Tidak Ditemukan</h5>
          </td>
        </tr>
        @endforelse
      </tbody>
      <tfoot>
        <tr>
          <th>#</th>
          <th>Nama Ukuran</th>
          <th>Ukuran (cm)</th>
          <th>Tindakan</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection
@endsection