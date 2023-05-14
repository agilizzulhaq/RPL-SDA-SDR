@extends('../layout2/mainnew')


@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Lokasi</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 flex justify-between">
        <label for="kode_lokasi" class="form-label text-black">Kode Lokasi</label>
        <input type="number" name="kode_lokasi" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nama_gedung" class="form-label text-black">Nama Gedung</label>
        <input type="text" name="nama_gedung" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="lantai" class="form-label text-black">Lantai</label>
        <input type="number" name="lantai" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Submit</button>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection