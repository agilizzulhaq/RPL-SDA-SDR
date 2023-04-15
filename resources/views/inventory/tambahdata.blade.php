<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL INVENTORY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Alat</h1>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/masukkandata" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="kodeAlat" class="form-label">Kode Alat</label>
                        <input type="number" name="kodeAlat" class="form-control" id="exampleInputEmail">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Nama Alat</label>
                        <input type="text" name="namaAlat" class="form-control" id="exampleInputEmail">
                      </div>
                      <div class="mb-3">
                        <label for="lokasiAlat" class="form-label">Lokasi Alat</label>
                        <input type="text" name="lokasiAlat" class="form-control" id="exampleInputEmail">
                      </div>
                      <div class="mb-3">
                        <label for="jenisAlat" class="form-label">Jenis Alat</label>
                        <select class="form-select" name="jenisAlat" aria-label="Default select example">
                          <option selected>Pilih Jenis</option>
                          <option value="Medis">Medis</option>
                          <option value="Non-Medis">Non-Medis</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="pemakaianAlat" class="form-label">Pemakaian Alat</label>
                        <select class="form-select" name="pemakaianAlat" aria-label="Default select example">
                          <option selected>Pilih Pemakaian</option>
                          <option value="Reusable">Reusable</option>
                          <option value="Disposable">Disposable</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="kondisiAlat" class="form-label">Kondisi Alat</label>
                        <select class="form-select" name="kondisiAlat" aria-label="Default select example">
                          <option selected>Pilih Kondisi</option>
                          <option value="Layak">Layak</option>
                          <option value="Tidak Layak">Tidak Layak</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="statusAlat" class="form-label">Status Alat</label>
                        <select class="form-select" name="statusAlat" aria-label="Default select example">
                          <option selected>Pilih Status</option>
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
  </body>
</html>