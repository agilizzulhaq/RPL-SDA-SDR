@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Ruangan</h1>

  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="/masukkanruangan" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 flex justify-between">
        <label for="kodeRuangan" class="form-label text-black">Kode Ruangan</label>
        <input type="number" name="kodeRuangan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="jenisRuangan" class="form-label text-black">Jenis Ruangan</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="jenisRuangan" aria-label="Default select example">
          <option selected>Pilih Jenis</option>
          <option value="UGD">UGD</option>
          <option value="ICU">ICU</option>
          <option value="HCU">HCU</option>
          <option value="ICCU">ICCU</option>
          <option value="NICU">NICU</option>
          <option value="PICU">PICU</option>
          <option value="Kamar Operasi">Kamar Operasi</option>
          <option value="Kamar Perawatan">Kamar Perawatan</option>
          <option value="Klinik Rawat Jalan">Klinik Rawat Jalan</option>
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="namaRuangan" class="form-label text-black">Nama Ruangan</label>
        <input type="text" name="namaRuangan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="lokasiRuangan" class="form-label text-black">Lokasi Ruangan</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="lokasiRuangan" aria-label="Default select example">
            <option selected>Pilih Lokasi Ruangan</option>
            @foreach ($lokasi as $item)
              <option value="{{ $item->kode_lokasi }}">{{ $item->nama_gedung . " Lantai " . $item->lantai}}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="kapasitas" class="form-label text-black">Kapasitas Ruangan</label>
        <input type="number" name="kapasitas" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="statusRuangan" class="form-label text-black">Status Ruangan</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="statusRuangan" aria-label="Default select example">
          <option selected>Pilih Status</option>
          <option value="Tersedia">Tersedia</option>
          <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
      </div>
      <div class="w-full flex justify-end">
        <button type="submit" class="px-3 py-2 bg-blue-600 rounded text-white">Submit</button>
      </div>
    </form>
  </div>
</div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection