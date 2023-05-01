<<<<<<< HEAD:resources/views/lokasi_alat/edit.blade.php
@extends('../layout2/mainnew')
=======
@extends('../layout2/main')

@section('nav')
    @include('../layout2/navmdnamaalat')
@endsection
>>>>>>> 55855882647e2a50d32a251f753741ade7551045:resources/views/nama_alat/edit.blade.php

@section('isi')
<h1 class="text-center">Edit Data Nama Alat</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('nama_alat.update',$nama_alat->kode_nama_alat) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="kode_nama_alat" class="form-label">Kode Nama Alat</label>
                <input type="number" name="kode_nama_alat" class="form-control" id="kode_nama_alat" value="{{ $nama_alat -> kode_nama_alat }}">
              </div>
              <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" name="nama_alat" class="form-control" id="nama_alat" value="{{ $nama_alat -> nama_alat }}">
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