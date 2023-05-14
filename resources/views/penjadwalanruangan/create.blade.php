@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New</h2>
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
           
        <form action="{{ route('penjadwalanruangan.store') }}" method="POST">
            @csrf
          
            <div class="mb-3">
                <label for="id_penjadwalan" class="form-label">ID Penjadwalan</label>
                <input type="number" name="id_penjadwalan" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="kodeRuangan" class="form-label">Kode Ruangan</label>
                <select class="form-select" name="kodeRuangan" aria-label="Default select example">
                    <option selected>Pilih Ruangan</option>
                    @foreach ($room as $item)
                      <option value="{{ $item->kodeRuangan }}"> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai}}
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <strong>Nama Pengguna:</strong>
                <input type="text" name="namaPeminjam" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="tanggalMasuk" class="form-label">Tanggal Masuk</label>
                <input type="date" name="tanggalMasuk" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="tanggalKeluar" class="form-label">Tanggal Keluar</label>
                <input type="date" name="tanggalKeluar" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="statusRuangan" class="form-label">Status Ruangan</label>
                <select class="form-select" name="statusRuangan" aria-label="Default select example">
                  <option selected>Pilih Status</option>
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
           
        </form>
    </div>
@endsection