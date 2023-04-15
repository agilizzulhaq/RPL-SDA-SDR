@extends('../layout2/main')

@section('nav')
    @include('../layout2/navperawatan')
@endsection

@section('isi')
    <div class="w-[1040px]">

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
      
        <form action="{{ route('perawatans.update',$perawatan->kode_alat)  }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Alat:</strong>
                        <input type="text" name="kode_alat" value="{{ $perawatan->kode_alat }}" class="form-control" placeholder="Kode Alat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Admin:</strong>
                        <input type="text" name="id_admin" value="{{ $perawatan->id_admin }}" class="form-control" placeholder="ID Admin">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Keeper:</strong>
                        <input type="text" name="id_keeper" value="{{ $perawatan->id_keeper }}" class="form-control" placeholder="ID Keeper">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID User:</strong>
                        <input type="text" name="id_user" value="{{ $perawatan->id_user }}" class="form-control" placeholder="ID User">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Alat:</strong>
                        <input type="text" value="{{ $perawatan->nama_alat }}" class="form-control" name="nama_alat" placeholder="Nama Alat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokasi Alat:</strong>
                        <input type="text" value="{{ $perawatan->lokasi_alat }}" class="form-control" name="lokasi_alat" placeholder="Lokasi Alat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Perawatan:</strong>
                        <input type="text" value="{{ $perawatan->jenis_perawatan }}" class="form-control" name="jenis_perawatan" placeholder="Jenis Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Perawatan:</strong>
                        <input type="text" value="{{ $perawatan->status_perawatan }}" class="form-control" name="status_perawatan" placeholder="Status Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Riwayat Perawatan:</strong>
                        <input type="text" value="{{ $perawatan->riwayat_perawatan }}" class="form-control" name="riwayat_perawatan" placeholder="Riwayat Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Catatan Perawatan:</strong>
                        <input type="text" value="{{ $perawatan->catatan_perawatan }}" class="form-control" name="catatan_perawatan" placeholder="Catatan Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
@endsection