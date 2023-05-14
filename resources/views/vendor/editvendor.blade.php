@extends('../layout2/mainnew')
@section('isi')
    <h1 class="text-center mb-4">Edit Data Vendor</h1>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/updatevendor/{{ $data -> id_vendor }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="id_vendor" class="form-label">ID Vendor</label>
                    <input type="number" name="id_vendor" class="form-control" id="id_vendor" value="{{ $data -> id_vendor }}">
                  </div>
                  <div class="mb-3">
                    <label for="nama_vendor" class="form-label">Nama Vendor</label>
                    <input type="text" name="nama_vendor" class="form-control" id="nama_vendor" value="{{ $data -> nama_vendor }}">
                  </div>
                  <div class="mb-3">
                    <label for="alamat_vendor" class="form-label">Alamat Vendor</label>
                    <input type="text" name="alamat_vendor" class="form-control" id="alamat_vendor" value="{{ $data -> alamat_vendor }}">
                  </div>
                  <div class="mb-3">
                    <label for="email_vendor" class="form-label">Email Vendor</label>
                    <input type="email" name="email_vendor" class="form-control" id="email_vendor" value="{{ $data -> email_vendor }}">
                  </div>
                  <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="number" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ $data -> nomor_telepon }}">
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