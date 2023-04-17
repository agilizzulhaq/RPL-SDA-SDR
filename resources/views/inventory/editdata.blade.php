@extends('../layout2/main')

@section('nav')
    @include('../layout2/navsda')
@endsection

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
                <label for="exampleInputEmail" class="form-label">Nama Alat</label>
                <input type="text" name="namaAlat" class="form-control" id="namaAlat" value="{{ $data -> namaAlat }}">
              </div>
              <div class="mb-3">
                <label for="lokasiAlat" class="form-label">Lokasi Alat</label>
                <input type="text" name="lokasiAlat" class="form-control" id="lokasiAlat" value="{{ $data -> lokasiAlat }}">
              </div>
              <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" id="stok" value="{{ $data -> stok }}">
              </div>
              <div class="mb-3">
                <label for="limit" class="form-label">Limit</label>
                <input type="text" name="limit" class="form-control" id="limit" value="{{ $data -> limit }}">
              </div>
              <div class="mb-3">
                <label for="jenisAlat" class="form-label">Jenis Alat</label>
                <select class="form-select" name="jenisAlat" aria-label="Default select example">
                  <option selected>{{ $data -> jenisAlat }}</option>
                  <option value="Medis">Medis</option>
                  <option value="Non-Medis">Non-Medis</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="pemakaianAlat" class="form-label">Pemakaian Alat</label>
                <select class="form-select" name="pemakaianAlat" aria-label="Default select example">
                  <option selected>{{ $data -> pemakaianAlat }}</option>
                  <option value="Reusable">Reusable</option>
                  <option value="Disposable">Disposable</option>
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