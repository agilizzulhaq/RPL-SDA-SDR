@extends('../layout2/main')

@section('nav')
    @include('../layout2/navperawatan')
@endsection

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
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
   
<form action="{{ route('perawatans.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Alat:</strong>
                <input type="text" name="kode_alat" class="form-control" placeholder="Kode Alat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Admin:</strong>
                <input type="text" name="id_admin" class="form-control" placeholder="ID Admin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Keeper:</strong>
                <input type="text" name="id_keeper" class="form-control" placeholder="ID_Keeper">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID User:</strong>
                <input type="text" name="id_user" class="form-control" placeholder="ID User">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Alat:</strong>
                <input type="text" name="nama_alat" class="form-control" placeholder="Nama Alat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi Alat:</strong>
                <input type="text" name="lokasi_alat" class="form-control" placeholder="Lokasi Alat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Perawatan:</strong>
                <input type="text" name="jenis_perawatan" class="form-control" placeholder="Jenis Perawatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Perawatan:</strong>
                <input type="text" name="status_perawatan" class="form-control" placeholder="Status Perawatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Riwayat Perawatan:</strong>
                <input type="text" name="riwayat_perawatan" class="form-control" placeholder="Riwayat Perawatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan Perawatan:</strong>
                <input type="text" name="catatan_perawatan" class="form-control" placeholder="Catatan Perawatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection