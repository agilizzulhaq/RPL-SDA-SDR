@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <h1 class="text-3xl text-black font-bold mb-5">Tambah Data Perawatan Alat</h1>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Pinjam</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('peminjaman_alat.index') }}"> Back</a>
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
            <form action="{{ route('peminjaman_alat.update',$peminjaman_alat->id_peminjaman) }}" method="POST">
                @csrf
                @method('PUT')           
                 
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">ID Peminjaman:</strong>
                        <input type="text" name="id_peminjaman" value="{{ $peminjaman_alat->id_peminjaman }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="Id Peminjaman">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kode Alat:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="kode_alat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="kode_alat" value="{{ $peminjaman_alat->nama_alat }}" aria-label="Default select example"> 
                            @foreach ($inventory as $item)
                                <option value="{{ $item->kodeAlat }}" @if ($item->kodeAlat == $peminjaman_alat->kode_alat) selected @endif>
                                    {{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Nama Peminjam:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="nama_peminjam" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_peminjam" value="{{ $peminjaman_alat->nama_peminjam }}" aria-label="Default select example"> 
                            @foreach ($pengguna as $item)
                                <option value="{{ $item->id_user }}" @if ($item->id_user == $peminjaman_alat->nama_peminjam) selected @endif>
                                    {{ $item->nama_user}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Pinjam:</strong>
                        <input type="datetime-local" value="{{ $peminjaman_alat->tanggal_peminjaman }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_peminjaman" placeholder="Tanggal Pinjam">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Kembali:</strong>
                        <input type="datetime-local" value="{{ $peminjaman_alat->tanggal_pengembalian }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_pengembalian" placeholder="Tanggal Kembali">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Status Peminjaman:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="status_peminjaman" aria-label="Default select example">
                            <option selected>{{ $peminjaman_alat -> status_peminjaman }}</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                            </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Alasan Peminjaman:</strong>
                        <input type="text" value="{{ $peminjaman_alat->alasan_peminjaman }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="alasan_peminjaman" placeholder="Alasan Peminjaman">
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