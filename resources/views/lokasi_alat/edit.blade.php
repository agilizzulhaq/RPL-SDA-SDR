@extends('../layout2/main')

@section('nav')
    @include('../layout2/navsda')
@endsection

@section('isi')
<h1 class="text-center">Edit Data Lokasi Alat</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('lokasi_alat.update',$lokasi_alat->kode_lokasi_alat) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="kode_lokasi_alat" class="form-label">Kode Lokasi Alat</label>
                <input type="number" name="kode_lokasi_alat" class="form-control" id="kode_lokasi_alat" value="{{ $lokasi_alat -> kode_lokasi_alat }}">
              </div>
              <div class="mb-3">
                <label for="lokasi_alat" class="form-label">Lokasi Alat</label>
                <input type="text" name="lokasi_alat" class="form-control" id="lokasi_alat" value="{{ $lokasi_alat -> lokasi_alat }}">
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