@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpeminjaman')
@endsection

@section('isi')
    <div class="w-[1060px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('peminjaman_alat.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Alat:</strong>
                    {{ $peminjaman_alat->kode_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Admin:</strong>
                    {{ $peminjaman_alat->id_admin }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID User:</strong>
                    {{ $peminjaman_alat->id_user }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Alat:</strong>
                    {{ $peminjaman_alat->nama_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Peminjam:</strong>
                    {{ $peminjaman_alat->nama_peminjam }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal peminjaman_alat:</strong>
                    {{ $peminjaman_alat->tanggal_peminjam }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Peminjaman:</strong>
                    {{ $peminjaman_alat->status_peminjaman }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alasan Peminjaman:</strong>
                    {{ $peminjaman_alat->alasan_peminjaman }}
                </div>
            </div>
        </div>
    </div>
@endsection