@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <h1 class="text-3xl text-black font-bold mb-5">Edit Data Penjadwalan Ruangan</h1>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit penjadwalan Penjadwalan Ruangan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('penjadwalanruangan.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong class="form-label text-black">Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
            <form action="{{ route('penjadwalanruangan.update',$penjadwalanruangan->id_penjadwalan)  }}" method="POST">
                @csrf
                @method('PUT')           
                 
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">ID Penjadwalan:</strong>
                        <input type="number" name="id_penjadwalan" value="{{ $penjadwalanruangan->id_penjadwalan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="ID Penjadwalan">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kode Ruangan:</strong>
                        <select name="kodeRuangan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="kodeRuangan" value="{{ $penjadwalanruangan->kodeRuangan }}" aria-label="Default select example"> 
                            @foreach ($room as $item)
                                <option value="{{ $item->kodeRuangan }}" @if ($item->kodeRuangan == $penjadwalanruangan->kodeRuangan) selected @endif> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Nama Pengguna:</strong>
                        <input type="text" name="namaPeminjam" value="{{ $penjadwalanruangan->namaPeminjam }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="Nama Pengguna">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Masuk:</strong>
                        <input type="date" value="{{ $penjadwalanruangan->tanggalMasuk }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggalMasuk" placeholder="Tanggal Masuk">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Keluar:</strong>
                        <input type="date" value="{{ $penjadwalanruangan->tanggalKeluar }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggalKeluar" placeholder="Tanggal Keluar">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Status Ruangan:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="statusRuangan" aria-label="Default select example">
                            <option selected>{{ $penjadwalanruangan -> statusRuangan }}</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <a class="px-4 no-underline py-2 hover:bg-[#b92a2a] bg-[#af0e0e] rounded text-white" href="{{ route('penjadwalanruangan.index') }}">Cancel</a>
                    <button type="submit" class="px-3 ml-3 py-2 bg-blue-600 rounded text-white">Submit</button>
                </div>  
            
           
            </form>
        </div>
    </div>
@endsection