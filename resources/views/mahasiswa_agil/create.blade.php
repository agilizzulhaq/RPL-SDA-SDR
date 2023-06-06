<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL MAHASISWA AGIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Penambahan Mahasiswa Baru</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/mahasiswa-agil" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/mahasiswa-agil/store" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="IDMahasiswa" class="form-label">NIM</label>
                                                <input type="number" name="IDMahasiswa" class="form-control" placeholder="Masukkan NIM" id="IDMahasiswa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Nama" class="form-label">Nama Lengkap</label>
                                                <input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama Lengkap" id="Nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select" name="Jenis_Kelamin" aria-label="Default select example">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Prodi" class="form-label">Prodi</label>
                                                <input type="text" name="Prodi" class="form-control" placeholder="Masukkan Jurusan" id="Prodi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Jurusan" class="form-label">Jurusan</label>
                                                <input type="text" name="Jurusan" class="form-control" placeholder="Masukkan Jurusan" id="Jurusan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Email" class="form-label">Alamat Email</label>
                                                <input type="email" name="Email" class="form-control" placeholder="Masukkan Alamat Email" id="Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="Tanggal_Lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" id="Tanggal_Lahir">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Agama" class="form-label">Agama</label>
                                                <select class="form-select" name="Agama" aria-label="Default select example">
                                                    <option selected>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="NIK" class="form-label">NIK</label>
                                                <input type="number" name="NIK" class="form-control" placeholder="Masukkan NIK" id="NIK">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Telepon" class="form-label">Nomor Telepon</label>
                                                <input type="number" name="Telepon" class="form-control" placeholder="Masukkan Nomor Telepon" id="Telepon">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Alamat" class="form-label">Alamat</label>
                                                <textarea name="Alamat" class="form-control" placeholder="Alamat" id="Alamat"></textarea><br/>
                                            </div>
                                            <input type="submit" class="btn btn-success" value="Simpan">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>