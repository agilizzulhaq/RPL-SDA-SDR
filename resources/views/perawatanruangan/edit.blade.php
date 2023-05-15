@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <h1 class="text-3xl text-black font-bold mb-5">Edit Data Pemeliharaan Ruangan</h1>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Perawatan Ruangan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatanruangan.index') }}"> Back</a>
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
            <form action="{{ route('perawatanruangan.update',$perawatanruangan->id_perawatan)  }}" method="POST">
                @csrf
                @method('PUT')          
                
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">ID Perawatan:</strong>
                        <input type="number" name="id_perawatan" value="{{ $perawatanruangan->id_perawatan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="ID Penjadwalan">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kode Ruangan:</strong>
                        <select name="kodeRuangan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="kodeRuangan" value="{{ $perawatanruangan->kodeRuangan }}" aria-label="Default select example"> 
                            @foreach ($room as $item)
                                <option value="{{ $item->kodeRuangan }}" @if ($item->kodeRuangan == $perawatanruangan->kodeRuangan) selected @endif> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kondisi:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="kondisi" aria-label="Default select example">
                            <option value="B" {{ $perawatanruangan->kondisi == 'B' ? 'selected' : '' }}>Baik</option>
                            <option value="S" {{ $perawatanruangan->kondisi == 'S' ? 'selected' : '' }}>Sedang</option>
                            <option value="R" {{ $perawatanruangan->kondisi == 'R' ? 'selected' : '' }}>Rusak</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Terakhir dirawat:</strong>
                        <input type="date" value="{{ $perawatanruangan->history }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="Terakhir dirawat" placeholder="Terakhir dirawat">
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Status Perawatan:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="statusPerawatan" aria-label="Default select example">
                            <option selected>{{ $perawatanruangan->statusperawatan }}</option>
                            <option value="Belum dirawat">Belum dirawat</option>
                            <option value="Sedang dirawat">Sedang dirawat</option>
                            <option value="Selesai dirawat">Selesai dirawat</option>
                        </select>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <a class="px-4 no-underline py-2 hover:bg-[#b92a2a] bg-[#af0e0e] rounded text-white" href="{{ route('perawatanruangan.index') }}">Cancel</a>
                    <button type="submit" class="px-3 ml-3 py-2 bg-blue-600 rounded text-white">Submit</button>
                  </div>  
            
            </form>
        </div>
    </div>
@endsection