@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">

  <h1 class="text-3xl text-black font-bold mb-5">Edit Data Mahasiswa</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="{{ route('mahasiswaregina.update',$mahasiswaregina->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3 flex justify-between">
        <label for="nim" class="form-label text-black">NIM</label>
        <input type="text" name="nim" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nim" value="{{ $mahasiswaregina -> nim }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nama" class="form-label text-black">Nama</label>
        <input type="text" name="nama" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama" value="{{ $mahasiswaregina -> nama }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="prodi" class="form-label text-black">Prodi</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="prodi" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="prodi" value="{{ $mahasiswaregina->prodi }}" aria-label="Default select example"> 
          @foreach ($prodi as $item)
              <option value="{{ $item->id }}" @if ($item->id == $mahasiswaregina->prodi) selected @endif>
                  {{ $item->namaprodi}}
              </option>
          @endforeach
        </select>
      </div>
      <div class="">
        <div class="mb-3 flex justify-between">
            <strong class="form-label text-black">Jenis Kelamin</strong>
            <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="jk" aria-label="Default select example">
                <option selected>{{ $mahasiswaregina -> jk }}</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                </select>
        </div>
      </div>
      <div class="">
        <div class="mb-3 flex justify-between">
            <strong class="form-label text-black">Agama</strong>
            <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="agama" aria-label="Default select example">
                <option selected>{{ $mahasiswaregina -> agama }}</option>
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
        <input type="text" name="nik" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nik" value="{{ $mahasiswaregina -> nik }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="tempatlahir" class="form-label text-black">Tempat Lahir</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tempatlahir" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="tempatlahir" value="{{ $mahasiswaregina->tempatlahir }}" aria-label="Default select example"> 
          @foreach ($tempatlahir as $item)
              <option value="{{ $item->id }}" @if ($item->id == $mahasiswaregina->tempatlahir) selected @endif>
                  {{ $item->kota}}
              </option>
          @endforeach
        </select>
      </div>
      <div class="">
        <div class="mb-3 flex justify-between">
            <strong class="form-label text-black">Tanggal Lahir:</strong>
            <input type="datetime" value="{{ $mahasiswaregina->tanggallahir }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggallahir" placeholder="Tanggal Lahir">
        </div>
    </div>
      
      <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Submit</button>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection
