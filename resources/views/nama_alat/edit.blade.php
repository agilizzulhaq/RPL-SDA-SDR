@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">

  <h1 class="text-3xl text-black font-bold mb-5">Edit Data Master Alat</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="{{ route('nama_alat.update',$nama_alat->kode_nama_alat) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3 flex justify-between">
        <label for="kode_nama_alat" class="form-label text-black">Kode Nama Alat</label>
        <input type="number" name="kode_nama_alat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="kode_nama_alat" value="{{ $nama_alat -> kode_nama_alat }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nama_alat" class="form-label text-black">Nama Alat</label>
        <input type="text" name="nama_alat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_alat" value="{{ $nama_alat -> nama_alat }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="stok" class="form-label text-black">Stok</label>
        <input type="text" name="stok" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="stok" value="{{ $nama_alat -> stok }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="limit" class="form-label text-black">Limit</label>
        <input type="text" name="limit" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="limit" value="{{ $nama_alat -> limit }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="satuan" class="form-label text-black">Jenis Alat</label>
        <select class="rounded py-1 px-2 w-[700px]  border-1 border-black text-black text-sm" name="satuan" aria-label="Default select example">
          <option selected>{{ $nama_alat -> satuan }}</option>
          <option value="Unit">Unit</option>
          <option value="Set">Set</option>
          <option value="Dus">Dus</option>
          <option value="Lusin">Lusin</option>
          <option value="Kg">Kg</option>
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="jenis_alat" class="form-label text-black">Jenis Alat</label>
        <select class="rounded py-1 px-2 w-[700px]  border-1 border-black text-black text-sm" name="jenis_alat" aria-label="Default select example">
          <option selected>{{ $nama_alat -> jenis_alat }}</option>
          <option value="Medis">Medis</option>
          <option value="Non-Medis">Non-Medis</option>
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="pemakaian_alat" class="form-label text-black">Pemakaian Alat</label>
        <select class="rounded py-1 px-2 w-[700px]  border-1 border-black text-black text-sm" name="pemakaian_alat" aria-label="Default select example">
          <option selected>{{ $nama_alat -> pemakaian_alat }}</option>
          <option value="Reusable">Reusable</option>
          <option value="Disposable">Disposable</option>
        </select>
      </div>
      <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Submit</button>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection