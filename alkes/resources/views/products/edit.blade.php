@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
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
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="kodeAlat">Kode Alat:</label>
                    <input type="text" class="form-control" name="kodeAlat" value="{{ $product->kodeAlat }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="namaAlat">Nama Alat:</label>
                    <input type="text" class="form-control" id="namaAlat" name="namaAlat" value="{{ $product->namaAlat }}" placeholder="Nama Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="namaAlat">Lokasi:</label>
                    <textarea class="form-control" name="lokasi" value="{{ $product->lokasi }}" placeholder="Input Lokasi"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="kondisi">Kondisi:</label>
                    <select class="form-control" name="kondisi" value="{{ $product->kondisi }}" >
                        <option value="Layak">Layak</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="status">Status:</label>
                <select class="form-control" name="status" value="{{ $product->status }}">
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