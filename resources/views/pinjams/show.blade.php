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
                    <a class="btn btn-primary" href="{{ route('pinjams.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Alat:</strong>
                    {{ $pinjam->kode_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Admin:</strong>
                    {{ $pinjam->id_admin }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID User:</strong>
                    {{ $pinjam->id_user }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Alat:</strong>
                    {{ $pinjam->nama_alat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Peminjam:</strong>
                    {{ $pinjam->nama_peminjam }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pinjam:</strong>
                    {{ $pinjam->tanggal_peminjam }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Peminjaman:</strong>
                    {{ $pinjam->status_peminjaman }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alasan Peminjaman:</strong>
                    {{ $pinjam->alasan_peminjaman }}
                </div>
            </div>
        </div>
    </div>
@endsection