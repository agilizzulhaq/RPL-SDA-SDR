@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Perawatan Ruangan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatanruangan.index') }}"> Back</a>
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
      
        <form action="{{ route('perawatanruangan.update',$perawatanruangan->id_perawatan)  }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Perawatan:</strong>
                        <input type="number" name="id_perawatan" value="{{ $perawatanruangan->id_perawatan }}" class="form-control" placeholder="ID Penjadwalan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Ruangan:</strong>
                        <select class="form-select" name="kodeRuangan" class="form-control" id="kodeRuangan" value="{{ $perawatanruangan->kodeRuangan }}" aria-label="Default select example"> 
                            @foreach ($room as $item)
                                <option value="{{ $item->kodeRuangan }}" @if ($item->kodeRuangan == $perawatanruangan->kodeRuangan) selected @endif> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kondisi:</strong>
                        <select class="form-select" name="kondisi" aria-label="Default select example">
                            <option value="B" {{ $perawatanruangan->kondisi == 'B' ? 'selected' : '' }}>Baik</option>
                            <option value="S" {{ $perawatanruangan->kondisi == 'S' ? 'selected' : '' }}>Sedang</option>
                            <option value="R" {{ $perawatanruangan->kondisi == 'R' ? 'selected' : '' }}>Rusak</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Terakhir dirawat:</strong>
                        <input type="date" value="{{ $perawatanruangan->history }}" class="form-control" name="Terakhir dirawat" placeholder="Terakhir dirawat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Perawatan:</strong>
                        <select class="form-select" name="statusPerawatan" aria-label="Default select example">
                            <option selected>{{ $perawatanruangan->statusperawatan }}</option>
                            <option value="Belum dirawat">Belum dirawat</option>
                            <option value="Sedang dirawat">Sedang dirawat</option>
                            <option value="Selesai dirawat">Selesai dirawat</option>
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