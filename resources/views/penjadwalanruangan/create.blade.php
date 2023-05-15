@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
      <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Penjadwalan Ruangan</h1>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('penjadwalanruangan.index') }}"> Back</a>
                </div>
            </div>
        </div>
           
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
          <form action="{{ route('penjadwalanruangan.store') }}" method="POST">
            @csrf
          
              <div class="mb-3 flex justify-between">
                <label for="id_penjadwalan" class="form-label text-black">ID Penjadwalan</label>
                <input type="number" name="id_penjadwalan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
              </div>
              <div class="mb-3 flex justify-between">
                <label for="kodeRuangan" class="form-label text-black">Kode Ruangan</label>
                <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="kodeRuangan" aria-label="Default select example">
                    <option selected>Pilih Ruangan</option>
                    @foreach ($room as $item)
                      <option value="{{ $item->kodeRuangan }}"> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai}}
                    @endforeach
                  </select>
              </div>
              <div class="mb-3 flex justify-between">
                <label class="form-label text-black">Nama Pengguna</label>
                <input type="text" name="namaPeminjam" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
              </div>
              <div class="mb-3 flex justify-between">
                <label for="tanggalMasuk" class="form-label text-black">Tanggal Masuk</label>
                <input type="date" name="tanggalMasuk" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
              </div>
              <div class="mb-3 flex justify-between">
                <label for="tanggalKeluar" class="form-label text-black">Tanggal Keluar</label>
                <input type="date" name="tanggalKeluar" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="exampleInputEmail">
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
                <a class="px-4 no-underline py-2 hover:bg-[#b92a2a] bg-[#af0e0e] rounded text-white" href="{{ route('penjadwalanruangan.index') }}">Cancel</a>
                <button type="submit" class="px-3 ml-3 py-2 bg-blue-600 rounded text-white">Submit</button>
              </div>             
          </form>
        </div>
    </div>
@endsection