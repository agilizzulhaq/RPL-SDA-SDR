@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit penjadwalan Penjadwalan Ruangan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('penjadwalanruangan.index') }}"> Back</a>
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
      
        <form action="{{ route('penjadwalanruangan.update',$penjadwalanruangan->id_penjadwalan)  }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Penjadwalan:</strong>
                        <input type="number" name="id_penjadwalan" value="{{ $penjadwalanruangan->id_penjadwalan }}" class="form-control" placeholder="ID Penjadwalan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Ruangan:</strong>
                        <select class="form-select" name="kodeRuangan" class="form-control" id="kodeRuangan" value="{{ $penjadwalanruangan->kodeRuangan }}" aria-label="Default select example"> 
                            @foreach ($room as $item)
                                <option value="{{ $item->kodeRuangan }}" @if ($item->kodeRuangan == $penjadwalanruangan->kodeRuangan) selected @endif> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Pengguna:</strong>
                        <input type="text" name="namaPeminjam" value="{{ $penjadwalanruangan->namaPeminjam }}" class="form-control" placeholder="Nama Pengguna">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Masuk:</strong>
                        <input type="date" value="{{ $penjadwalanruangan->tanggalMasuk }}" class="form-control" name="tanggalMasuk" placeholder="Tanggal Masuk">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Keluar:</strong>
                        <input type="date" value="{{ $penjadwalanruangan->tanggalKeluar }}" class="form-control" name="tanggalKeluar" placeholder="Tanggal Keluar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Ruangan:</strong>
                        <select class="form-select" name="statusRuangan" aria-label="Default select example">
                            <option selected>{{ $penjadwalanruangan -> statusRuangan }}</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
@endsection