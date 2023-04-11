@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpeminjaman')
@endsection

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pinjams.index') }}"> Back</a>
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
   
<form action="{{ route('pinjams.store') }}" method="POST">
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
                <strong>Nama Peminjam:</strong>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Nama Peminjam">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam:</strong>
                <input type="datetime-local" class="form-control" name="tanggal_peminjam" placeholder="Tanggal Pinjam">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman:</strong>
                <input type="text" name="status_peminjaman" class="form-control" placeholder="Status Peminjaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alasan Peminjaman:</strong>
                <input type="text" name="alasan_peminjaman" class="form-control" placeholder="Alasan Peminjaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection