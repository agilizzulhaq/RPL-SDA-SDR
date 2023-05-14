@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Alat</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="/masukkanalat" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 flex justify-between">
        <label for="kodeAlat" class="form-label text-black">Kode Alat</label>
        <input type="number" name="kodeAlat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="namaAlat" class="form-label text-black">Nama Alat</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" name="namaAlat" aria-label="Default select example">
          <option selected>Pilih Nama Alat</option>
          @foreach ($nama_alat as $item)
            <option value="{{ $item->kode_nama_alat }}">{{ $item->nama_alat}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="lokasiAlat" class="form-label text-black">Lokasi Alat</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" name="lokasiAlat" aria-label="Default select example">
          <option selected>Pilih Lokasi Alat</option>
          @foreach ($room as $item)
            <option value="{{ $item->kodeRuangan }}"> {{ " Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai}}
          @endforeach
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="kondisiAlat" class="form-label text-black">Kondisi Alat</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" name="kondisiAlat" aria-label="Default select example">
          <option selected>Pilih Kondisi</option>
          <option value="Layak">Layak</option>
          <option value="Tidak Layak">Tidak Layak</option>
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="statusAlat" class="form-label text-black">Status Alat</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" name="statusAlat" aria-label="Default select example">
          <option selected>Pilih Status</option>
          <option value="Tersedia">Tersedia</option>
          <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
      </div>
      <div class="w-full flex justify-end">
        <button type="submit" class="px-3 py-2 hover:bg-blue-500 bg-blue-600 rounded text-white">Submit</button>
      </div>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection