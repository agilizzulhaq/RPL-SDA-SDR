@extends('../layout2/mainnew')
@section('isi')
    <h1 class="text-center mb-4">Tambah Data User</h1>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/insertusers" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                      <label for="id_user" class="form-label">ID User</label>
                      <input type="number" name="id_user" class="form-control" id="id_user">
                    </div>
                    <div class="mb-3">
                      <label for="nama_user" class="form-label">Nama User</label>
                      <input type="text" name="nama_user" class="form-control" id="nama_user">
                    </div>
                    <div class="mb-3">
                      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                      <label for="alamat_user" class="form-label">Alamat User</label>
                      <input type="text" name="alamat_user" class="form-control" id="alamat_user">
                    </div>
                    <div class="mb-3">
                      <label for="email_user" class="form-label">Email User</label>
                      <input type="email" name="email_user" class="form-control" id="email_user">
                    </div>
                    <div class="mb-3">
                      <label for="role_user" class="form-label">Role User</label>
                      <select class="form-select" name="role_user" aria-label="Default select example">
                        <option selected>Pilih Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Warehouse Keeper">Warehouse Keeper</option>
                        <option value="Pegawai">Pegawai</option>
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