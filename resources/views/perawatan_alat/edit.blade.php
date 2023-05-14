@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Perawatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatan_alat.index') }}"> Back</a>
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
      
        <form action="{{ route('perawatan_alat.update',$perawatan_alat->id_perawatan)  }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Perawatan:</strong>
                        <input type="text" name="id_perawatan" value="{{ $perawatan_alat->id_perawatan }}" class="form-control" placeholder="Kode Alat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Alat:</strong>
                        <select class="form-select" name="kode_alat" class="form-control" id="kode_alat" value="{{ $perawatan_alat->kode_alat }}" aria-label="Default select example"> 
                            @foreach ($inventory as $item)
                                <option value="{{ $item->kodeAlat }}" @if ($item->kodeAlat == $perawatan_alat->kode_alat) selected @endif>
                                    {{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Perawatan:</strong>
                        <select class="form-select" name="jenis_perawatan" aria-label="Default select example">
                            <option selected>{{ $perawatan_alat -> jenis_perawatan }}</option>
                            <option value="Perawatan rutin">Perawatan rutin</option>
                            <option value="Pembersihan alat">Pembersihan alat</option>
                            <option value="Perawatan kerusakan">Perawatan kerusakan</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Perawatan:</strong>
                        <select class="form-select" name="status_perawatan" aria-label="Default select example">
                            <option selected>{{ $perawatan_alat -> status_perawatan }}</option>
                            <option value="Belum konfirmasi">Belum konfirmasi</option>
                            <option value="Konfirmasi untuk perawatan">Konfirmasi untuk perawatan</option>
                            <option value="Sedang dalam perawatan">Sedang dalam perawatan</option>
                            <option value="Perawatan selesai">Perawatan selesai</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Perawatan:</strong>
                        <input type="datetime-local" value="{{ $perawatan_alat->tanggal_perawatan }}" class="form-control" name="tanggal_perawatan" placeholder="Tanggal Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Riwayat Perawatan:</strong>
                        <input type="text" value="{{ $perawatan_alat->riwayat_perawatan }}" class="form-control" name="riwayat_perawatan" placeholder="Riwayat Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Catatan Perawatan:</strong>
                        <input type="text" value="{{ $perawatan_alat->catatan_perawatan }}" class="form-control" name="catatan_perawatan" placeholder="Catatan Perawatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
@endsection