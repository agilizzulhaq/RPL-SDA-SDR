@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Tambah Alat Kesehatan </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Kembali</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="kodeAlat">Kode Alat:</label>
        <input type="text" class="form-control" name="kodeAlat" placeholder="Kode Alat">
    </div>

    <div class="form-group">
        <label for="namaAlat">Nama Alat:</label>
        <input type="text" class="form-control" name="namaAlat" placeholder="Nama Alat">
    </div>

    <div class="form-group">
        <label for="lokasi">Lokasi:</label>
        <textarea class="form-control" name="lokasi" placeholder="Input Lokasi"></textarea>
    </div>
    <div class="form-group">
        <label for="kondisi">Kondisi:</label>
        <select class="form-control" name="kondisi">
            <option value="Layak">Layak</option>
            <option value="Rusak">Rusak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
        </div>
    </div>
   
</form>
@endsection