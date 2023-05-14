@extends('../layout2/mainnew')

@section('isi')
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Daftar Beli Alat Kesehatan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pembelian.index') }}"> Back</a>
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

<div class="mt-16 mx-10">
    <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Pembelian Alat</h1>
    <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
        <form action="{{ route('pembelian.store') }}" method="POST">
            @csrf
          
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="id_pembelian">ID Pembelian:</label>
                <input type="text" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="id_pembelian" placeholder="ID Pembelian Alat">
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="nama_alat" class="form-label">Nama Alat</label>
                <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="nama_alat" aria-label="Default select example">
                  <option selected>Pilih Nama Alat</option>
                  @foreach ($nama_alat as $item)
                    <option value="{{ $item->kode_nama_alat }}">{{ $item->nama_alat}}</option>
                  @endforeach
                </select>
              </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="tanggal_pembelian">Tanggal Pembelian:</label>
                <input type="date" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_pembelian" placeholder="Tanggal Pembelian">
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="vendor">Vendor:</label>
                <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="vendor" aria-label="Default select example">
                    <option selected>Pilih Nama Vendor</option>
                    @foreach ($vendor as $item)
                      <option value="{{ $item->id_vendor }}">{{ $item->nama_vendor}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="harga_satuan">Harga Satuan:</label>
                <input type="number" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="harga_satuan" placeholder="Harga Satuan">
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="jumlah_pembelian">Jumlah Pembelian:</label>
                <input type="number" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="jumlah_pembelian" placeholder="Jumlah Pembelian">
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="keterangan">Keterangan:</label>
                <input type="text" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="keterangan" placeholder="Keterangan">
            </div>
            <div class="mb-3 flex justify-between">
                <label class="form-label text-black" for="status">Status:</label>
                <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="status">
                    <option value="Belum konfirmasi">Belum konfirmasi</option>
                    <option value="Konfirmasi untuk pembelian">Konfirmasi untuk pembelian</option>
                    <option value="Sedang dalam pemesanan">Sedang dalam pemesanan</option>
                    <option value="Barang datang">Barang datang</option>
                    <option value="Barang masuk database">Barang masuk database</option>
                </select>
            </div>
            <div class="w-full flex justify-end">
                <a class="px-4 no-underline py-2 hover:bg-[#b92a2a] bg-[#af0e0e] rounded text-white" href="{{ route('pembelian.index') }}"> Back</a>
                <button type="submit" class="px-4 py-2 ml-3 hover:bg-blue-500 bg-blue-600 rounded text-white">Submit</button>
            </div>   
        </form>
    </div>
</div>
   
@endsection