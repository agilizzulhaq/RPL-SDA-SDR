@extends('../layout2/mainnew')

@section('isi')
<h1 class="text-center">Tambah Data Master Alat</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('nama_alat.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="kode_nama_alat" class="form-label">Kode Nama Alat</label>
                <input type="number" name="kode_nama_alat" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" name="nama_alat" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="limit" class="form-label">Limit</label>
                <input type="text" name="limit" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="satuan" class="form-label">Satuan</label>
                <select class="form-select" name="satuan" aria-label="Default select example">
                  <option selected>Pilih Satuan</option>
                  <option value="Unit">Unit</option>
                  <option value="Set">Set</option>
                  <option value="Dus">Dus</option>
                  <option value="Lusin">Lusin</option>
                  <option value="Kg">Kg</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="jenis_alat" class="form-label">Jenis Alat</label>
                <select class="form-select" name="jenis_alat" aria-label="Default select example">
                  <option selected>Pilih Jenis</option>
                  <option value="Medis">Medis</option>
                  <option value="Non-Medis">Non-Medis</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="pemakaian_alat" class="form-label">Pemakaian Alat</label>
                <select class="form-select" name="pemakaian_alat" aria-label="Default select example">
                  <option selected>Pilih Pemakaian</option>
                  <option value="Reusable">Reusable</option>
                  <option value="Disposable">Disposable</option>
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