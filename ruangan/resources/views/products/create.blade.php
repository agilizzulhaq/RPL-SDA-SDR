@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Ruangan</h2>
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
        <label for="kodeRuangan">Kode Ruangan:</label>
        <input type="text" class="form-control" name="kodeRuangan" placeholder="Kode Ruangan">
    </div>

    <div class="form-group">
        <label for="jenisRuangan">Kondisi:</label>
        <select class="form-control" name="jenisRuangan">
            <option value="UGD">UGD</option>
            <option value="ICU">ICU</option>
            <option value="HCU">HCU</option>
            <option value="ICCU">ICCU</option>
            <option value="NICU">NICU</option>
            <option value="PICU">PICU</option>
            <option value="Kamar Operasi">Kamar Operasi</option>
            <option value="Kamar Perawatan">Kamar Perawatan</option>
            <option value="Klinik Rawat Jalan">Klinik Rawat Jalan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="namaRuangan">Nama Ruangan:</label>
        <input type="text" class="form-control" name="namaRuangan" placeholder="Nama Ruangan">
    </div>

    <div class="form-group">
        <label for="lokasi">Lokasi:</label>
        <textarea class="form-control" name="lokasi" placeholder="Input Lokasi"></textarea>
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