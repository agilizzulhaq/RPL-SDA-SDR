@extends('perawatans.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Perawatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('perawatans.index') }}"> Back</a>
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
  
    <form action="{{ route('perawatans.update',$perawatan->kodealat)  }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Alat:</strong>
                    <input type="text" name="kodealat" value="{{ $perawatan->kodealat }}" class="form-control" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Alat:</strong>
                    <input type="text" value="{{ $perawatan->namaalat }}" class="form-control" name="namaalat" placeholder="Nama Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi Alat:</strong>
                    <input type="text" value="{{ $perawatan->lokasialat }}" class="form-control" name="lokasialat" placeholder="Lokasi Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Perawatan:</strong>
                    <input type="text" value="{{ $perawatan->jenisperawatan }}" class="form-control" name="jenisperawatan" placeholder="Jenis Perawatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Catatan Perawatan:</strong>
                    <input type="text" value="{{ $perawatan->catatanperawatan }}" class="form-control" name="catatanperawatan" placeholder="Catatan Perawatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Perawatan:</strong>
                    <input type="datetime-local" value="{{ $perawatan->tanggalperawatan }}" class="form-control" name="tanggalperawatan" placeholder="Tanggal Perawatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection