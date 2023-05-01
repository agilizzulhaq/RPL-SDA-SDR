@extends('../layout2/mainnew')

@section('isi')
<h1 class="text-center">Edit Data Lokasi Ruangan</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('lokasi_ruangan.update',$lokasi_ruangan->kode_lokasi_ruangan) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="kode_lokasi_ruangan" class="form-label">Kode Lokasi Ruangan</label>
                <input type="number" name="kode_lokasi_ruangan" class="form-control" id="kode_lokasi_ruangan" value="{{ $lokasi_ruangan -> kode_lokasi_ruangan }}">
              </div>
              <div class="mb-3">
                <label for="lokasi_ruangan" class="form-label">Lokasi Ruangan</label>
                <input type="text" name="lokasi_ruangan" class="form-control" id="lokasi_ruangan" value="{{ $lokasi_ruangan -> lokasi_ruangan }}">
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