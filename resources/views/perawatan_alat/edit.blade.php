@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <h1 class="text-3xl text-black font-bold mb-5">Edit Perawatan Alat</h1>

        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Perawatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatan_alat.index') }}"> Back</a>
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
            <form action="{{ route('perawatan_alat.update',$perawatan_alat->id_perawatan)  }}" method="POST">
                @csrf
                @method('PUT')
        
                <div class="">
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">ID Perawatan:</strong>
                        <input type="text" name="id_perawatan" value="{{ $perawatan_alat->id_perawatan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" placeholder="Kode Alat">
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Kode Alat:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="kode_alat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="kode_alat" value="{{ $perawatan_alat->kode_alat }}" aria-label="Default select example"> 
                            @foreach ($inventory as $item)
                                <option value="{{ $item->kodeAlat }}" @if ($item->kodeAlat == $perawatan_alat->kode_alat) selected @endif>
                                    {{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Jenis Perawatan:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="jenis_perawatan" aria-label="Default select example">
                            <option selected>{{ $perawatan_alat -> jenis_perawatan }}</option>
                            <option value="Perawatan rutin">Perawatan rutin</option>
                            <option value="Pembersihan alat">Pembersihan alat</option>
                            <option value="Perawatan kerusakan">Perawatan kerusakan</option>
                        </select>
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Status Perawatan:</strong>
                        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="status_perawatan" aria-label="Default select example">
                            <option selected>{{ $perawatan_alat -> status_perawatan }}</option>
                            <option value="Belum konfirmasi">Belum konfirmasi</option>
                            <option value="Konfirmasi untuk perawatan">Konfirmasi untuk perawatan</option>
                            <option value="Sedang dalam perawatan">Sedang dalam perawatan</option>
                            <option value="Perawatan selesai">Perawatan selesai</option>
                        </select>
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Tanggal Perawatan:</strong>
                        <input type="datetime-local" value="{{ $perawatan_alat->tanggal_perawatan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="tanggal_perawatan" placeholder="Tanggal Perawatan">
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Riwayat Perawatan:</strong>
                        <input type="text" value="{{ $perawatan_alat->riwayat_perawatan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="riwayat_perawatan" placeholder="Riwayat Perawatan">
                    </div>
                    <div class="mb-3 flex justify-between">
                        <strong class="form-label text-black">Catatan Perawatan:</strong>
                        <input type="text" value="{{ $perawatan_alat->catatan_perawatan }}" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="catatan_perawatan" placeholder="Catatan Perawatan">
                    </div>
                    <div class="w-full flex justify-end">
                        <a class="px-4 py-2 bg-[#af0e0e] hover:bg-[#c11f1f] no-underline rounded text-white" href="{{ route('perawatan_alat.index') }}">Cancel</a>
                        <button type="submit" class="ml-5 px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded text-white">Submit</button>
                    </div>
                </div>
        
            </form>
        </div>
    </div>
@endsection