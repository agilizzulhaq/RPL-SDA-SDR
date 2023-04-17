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
                    <a class="btn btn-primary" href="{{ route('perawatan_alat.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Alat:</strong>
                    {{ $perawatan_alat->kode_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Alat:</strong>
                    {{ $perawatan_alat->nama_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi Alat:</strong>
                    {{ $perawatan_alat->lokasi_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Perawatan:</strong>
                    {{ $perawatan_alat->jenis_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Perawatan:</strong>
                    {{ $perawatan_alat->status_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Riwayat Perawatan:</strong>
                    {{ $perawatan_alat->riwayat_perawatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Catatan Perawatan:</strong>
                    {{ $perawatan_alat->catatan_perawatan }}
                </div>
            </div>
        </div>
    </div>
@endsection