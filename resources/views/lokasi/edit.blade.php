@extends('../layout2/mainnew')


@section('isi')

@section('isi')
<h1 class="text-center">Edit Data Lokasi</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('lokasi.update',$lokasi->kode_lokasi) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="kode_lokasi" class="form-label">Kode Lokasi</label>
                <input type="number" name="kode_lokasi" class="form-control" id="kode_lokasi" value="{{ $lokasi -> kode_lokasi }}">
              </div>
              <div class="mb-3">
                <label for="nama_gedung" class="form-label">Nama Gedung</label>
                <input type="text" name="nama_gedung" class="form-control" id="nama_gedung" value="{{ $lokasi -> nama_gedung }}">
              </div>
              <div class="mb-3">
                <label for="lantai" class="form-label">Lantai</label>
                <input type="number" name="lantai" class="form-control" id="lantai" value="{{ $lokasi -> lantai }}">
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