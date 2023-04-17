@extends('../layout2/main')

@section('nav')
    @include('../layout2/navmdruangan')
@endsection

@section('isi')
    <h1 class="text-center mb-4">Edit Data Ruangan</h1>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/updateruangan/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="kodeRuangan" class="form-label">Kode Ruangan</label>
                        <input type="number" name="kodeRuangan" class="form-control" id="kodeRuangan" value="{{ $data -> kodeRuangan }}">
                      </div>
                      <div class="mb-3">
                        <label for="jenisRuangan" class="form-label">Jenis Ruangan</label>
                        <select class="form-select" name="jenisRuangan" aria-label="Default select example">
                          <option selected>{{ $data -> jenisRuangan }}</option>
                          <option value="UGD">UGD</option>
                          <option value="ICU">ICU</option>
                          <option value="HCU">HCU</option>
                          <option value="ICCU">ICCU</option>
                          <option value="NICU">NICU</option>
                          <option value="PICU">PICU</option>
                          <option value="Kamar Operasi">Kamar Operasi</option>
                          <option value="Kamar Perawatan">Kamar Perawatan</option>
                          <option value="Klinik Rawat Jalan">Klinik Rawat Jalan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="namaRuangan" class="form-label">Nama Ruangan</label>
                        <input type="text" name="namaRuangan" class="form-control" id="namaRuangan" value="{{ $data -> namaRuangan }}">
                      </div>
                      <div class="mb-3">
                        <label for="lokasiRuangan" class="form-label">Lokasi Ruangan</label>
                        <input type="text" name="lokasiRuangan" class="form-control" id="lokasiRuangan" value="{{ $data -> lokasiRuangan }}">
                      </div>
                      <div class="mb-3">
                        <label for="statusRuangan" class="form-label">Status Ruangan</label>
                        <select class="form-select" name="statusRuangan" aria-label="Default select example">
                          <option selected>{{ $data -> statusRuangan }}</option>
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