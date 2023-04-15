@extends('../layout2/main')

@section('nav')
    @include('../layout2/navperawatan')
@endsection

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatans.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Alat:</strong>
                    {{ $perawatan->kode_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Admin:</strong>
                    {{ $perawatan->id_admin }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Keeper:</strong>
                    {{ $perawatan->id_keeper }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID User:</strong>
                    {{ $perawatan->id_user }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Alat:</strong>
                    {{ $perawatan->nama_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi Alat:</strong>
                    {{ $perawatan->lokasi_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Perawatan:</strong>
                    {{ $perawatan->jenis_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Perawatan:</strong>
                    {{ $perawatan->status_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Riwayat Perawatan:</strong>
                    {{ $perawatan->riwayat_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Catatan Perawatan:</strong>
                    {{ $perawatan->catatan_perawatan }}
                </div>
            </div>
        </div>
    </div>
@endsection