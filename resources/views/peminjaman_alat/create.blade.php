@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Perawatan Alat</h1>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('peminjaman_alat.index') }}"> Back</a>
                </div>
            </div>
        </div> --}}
           
        {{-- @if ($errors->any())
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
            <form action="{{ route('peminjaman_alat.store') }}" method="POST">
                @csrf                 
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Id Peminjaman:</strong>
                        <input type="text" name="id_peminjaman" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="ID Peminjaman">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kode Alat :</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="kode_alat" aria-label="Default select example">
                            <option selected>Pilih Kode Alat</option>
                            @foreach ($inventory as $item)
                                <option value="{{ $item->kodeAlat }}">
                                    {{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Nama Peminjam:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="nama_peminjam" aria-label="Default select example">
                            <option selected>Masukkan Nama Peminjam</option>
                            @foreach ($pengguna as $item)
                                <option value="{{ $item->id_user }}">{{ $item->nama_user}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Pinjam:</strong>
                        <input type="datetime-local" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_peminjaman" placeholder="Tanggal Pinjam">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Kembali:</strong>
                        <input type="datetime-local" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_pengembalian" placeholder="Tanggal Kembali">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Status Peminjaman:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="status_peminjaman" aria-label=".form-select-sm example">
                            <option selected>Pilih Status Peminjaman</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Alasan Peminjaman:</strong>
                        <input type="text" name="alasan_peminjaman" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="Alasan Peminjaman">
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <a class="px-4 py-2 bg-[#af0e0e] hover:bg-[#c11f1f] no-underline rounded text-white" href="{{ route('peminjaman_alat.index') }}">Cancel</a>
                    <button type="submit" class="ml-5 px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded text-white">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection