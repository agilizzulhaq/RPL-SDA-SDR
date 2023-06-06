@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Mahasiswa</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="{{ route('mahasiswaregina.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="mb-3 flex justify-between">
        <label for="nim" class="form-label text-black">NIM</label>
        <input type="text" name="nim" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nama" class="form-label text-black">Nama</label>
        <input type="text" name="nama" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="prodi" class="form-label text-black">Prodi</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="prodi" aria-label="Default select example">
          <option selected>Pilih Prodi</option>
          @foreach ($prodi as $item)
              <option value="{{ $item->id }}">
                  {{ $item->namaprodi }}
              </option>
          @endforeach
        </select>
      </div>
      <div class="">
        <div class="mb-3 flex justify-between">
            <strong  class="form-label text-black">Jenis Kelamin:</strong>
            <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="jk" name="jk" aria-label=".form-select-sm example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </div>
    </div>
    <div class="">
      <div class="mb-3 flex justify-between">
          <strong  class="form-label text-black">Agama:</strong>
          <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="agama" name="agama" aria-label=".form-select-sm example">
              <option selected>Pilih Agama</option>
              <option value="islam">islam</option>
              <option value="kristen">kristen</option>
              <option value="katholik">katholik</option>
              <option value="buddha">buddha</option>
              <option value="konghuchu">konghuchu</option>
              <option value="hindu">hindu</option>
          </select>
      </div>
  </div>
  <div class="mb-3 flex justify-between">
    <label for="nik" class="form-label text-black">NIK</label>
    <input type="text" name="nik" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
  </div>
      <div class="mb-3 flex justify-between">
        <label for="tempatlahir" class="form-label text-black">Tempat Lahir</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tempatlahir" aria-label="Default select example">
          <option selected>Pilih Tempat Lahir</option>
          @foreach ($tempatlahir as $item)
              <option value="{{ $item->id }}">
                  {{ $item->kota }}
              </option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="tanggallahir" class="form-label text-black">Tanggal Lahir</label>
        <input type="date" name="tanggallahir" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="tanggallahir">
      </div>
      <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Submit</button>
    </form>
  </div>        
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection