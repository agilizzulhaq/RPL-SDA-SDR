@extends('../layout2/main')

@section('nav')
    @include('../layout2/navmdlokasi')
@endsection

@section('isi')
    <div class="w-[1060px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('lokasi.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Lokasi:</strong>
                    {{ $lokasi->kode_lokasi }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Gedung:</strong>
                    {{ $lokasi->nama_gedung }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lantai:</strong>
                    {{ $lokasi->lantai }}
                </div>
            </div>
        </div>
    </div>
@endsection