@extends('../layout2/mainnew')

@section('isi')
<h1 class="text-center">Edit Data Alat</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/updatealat/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="kodeAlat" class="form-label">Kode Alat</label>
                <input type="number" name="kodeAlat" class="form-control" id="kodeAlat" value="{{ $data -> kodeAlat }}">
              </div>
              <div class="mb-3">
                <label for="namaAlat" class="form-label">Nama Alat</label>
                <select class="form-select" name="namaAlat" class="form-control" id="namaAlat" value="{{ $data->namaAlat }}" aria-label="Default select example"> 
                  @foreach ($nama_alat as $item)
                      <option value="{{ $item->kode_nama_alat }}" @if ($item->kode_nama_alat == $data->namaAlat) selected @endif>
                          {{ $item->nama_alat }}
                      </option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="lokasiAlat" class="form-label">Lokasi Alat</label>
                <select class="form-select" name="lokasiAlat" class="form-control" id="lokasiAlat" value="{{ $data->lokasiAlat }}" aria-label="Default select example"> 
                  @foreach ($room as $item)
                      <option value="{{ $item->kodeRuangan }}" @if ($item->kodeRuangan == $data->lokasiAlat) selected @endif>
                          {{ " Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai}}
                      </option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="kondisiAlat" class="form-label">Kondisi Alat</label>
                <select class="form-select" name="kondisiAlat" aria-label="Default select example">
                  <option selected>{{ $data -> kondisiAlat }}</option>
                  <option value="Layak">Layak</option>
                  <option value="Tidak Layak">Tidak Layak</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="statusAlat" class="form-label">Status Alat</label>
                <select class="form-select" name="statusAlat" aria-label="Default select example">
                  <option selected>{{ $data -> statusAlat }}</option>
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection