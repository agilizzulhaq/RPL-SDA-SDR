@extends('../layout2/mainnew')

@section('isi')
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
                                    <form action="/mahasiswa-agil/{{ $mahasiswa -> IDMahasiswa }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="IDMahasiswa" class="form-label">NIM</label>
                                        <input type="number" name="IDMahasiswa" class="form-control" placeholder="Masukkan NIM" value="{{ $mahasiswa -> IDMahasiswa }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama" value="{{ $mahasiswa -> Nama }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Prodi" class="form-label">Prodi</label>
                                        <input type="text" name="Prodi" class="form-control" placeholder="Masukkan Prodi" value="{{ $mahasiswa -> Prodi }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Jurusan" class="form-label">Jurusan</label>
                                        <input type="text" name="Jurusan" class="form-control" placeholder="Masukkan Jurusan" value="{{ $mahasiswa -> Jurusan }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Email" class="form-label">Alamat Email</label>
                                        <input type="email" name="Email" class="form-control" placeholder="Masukkan Email" value="{{ $mahasiswa -> Email }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="Tanggal_Lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ $mahasiswa -> Tanggal_Lahir }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Agama" class="form-label">Agama</label>
                                        <select class="form-control" name="Agama" aria-label="Default select example" value="{{ $mahasiswa -> Agama }}">
                                            <option selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="NIK" class="form-label">NIK</label>
                                        <input type="number" name="NIK" class="form-control" placeholder="Masukkan NIK" value="{{ $mahasiswa -> NIK }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Telepon" class="form-label">Nomor Telepon</label>
                                        <input type="number" name="Telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ $mahasiswa -> Telepon }}"><br/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Alamat" class="form-label">Alamat</label>
                                        <textarea name="Alamat" class="form-control" {{ $mahasiswa -> Alamat }} placeholder="Masukkan Alamat"></textarea><br/>
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
@endsection