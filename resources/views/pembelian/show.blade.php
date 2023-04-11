@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpembelian')
@endsection

@section('isi')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Deskripsi Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pembelian.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pembelian Alat</strong>
                {{ $pembelian->idPembelianAlat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Alat</strong>
                {{ $pembelian->namaAlat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pembelian</strong>
                {{ $pembelian->tanggalPembelian }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vendor</strong>
                {{ $pembelian->vendor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga</strong>
                {{ $pembelian->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alasan</strong>
                {{ $pembelian->alasan }}
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Alat</strong>
                {{ $pembelian->kodeAlat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Alat</strong>
                {{ $pembelian->namaAlat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi</strong>
                {{ $pembelian->lokasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi</strong>
                {{ $pembelian->kondisi }}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                {{ $pembelian->status }}
            </div>
        </div>
    </div>
@endsection