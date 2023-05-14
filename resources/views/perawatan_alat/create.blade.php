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
                <a class="btn btn-primary" href="{{ route('perawatan_alat.index') }}"> Back</a>
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
        <form action="{{ route('perawatan_alat.store') }}" method="POST">
            @csrf           
            
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">ID Perawatan:</strong>
                    <input type="text" name="id_perawatan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" placeholder="ID Perawatan">
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Kode Alat:</strong>
                    <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" name="kode_alat" aria-label="Default select example">
                        <option selected>Pilih Alat</option>
                        @foreach ($inventory as $item)
                            <option value="{{ $item->kodeAlat }}">{{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Jenis Perawatan:</strong>
                    <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" name="jenis_perawatan" aria-label=".form-select-sm example">
                        <option selected>Pilih Jenis Perawatan</option>
                        <option value="Perawatan rutin">Perawatan rutin</option>
                        <option value="Pembersihan alat">Pembersihan alat</option>
                        <option value="Perawatan kerusakan">Perawatan kerusakan</option>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Status Perawatan:</strong>
                    <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" name="status_perawatan" aria-label=".form-select-sm example">
                        <option selected>Pilih Status Perawatan</option>
                        <option value="Belum konfirmasi">Belum konfirmasi</option>
                        <option value="Konfirmasi untuk perawatan">Konfirmasi untuk perawatan</option>
                        <option value="Sedang dalam perawatan">Sedang dalam perawatan</option>
                        <option value="Perawatan selesai">Perawatan selesai</option>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Tanggal Perawatan:</strong>
                    <input type="datetime-local" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" name="tanggal_perawatan" placeholder="Tanggal Perawatan">
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Riwayat Perawatan:</strong>
                    <input type="textarea" name="riwayat_perawatan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" placeholder="Riwayat Perawatan">
                </div>
            </div>
            <div class="">
                <div class="mb-3 flex justify-between">
                    <strong  class="form-label text-black">Catatan Perawatan:</strong>
                    <input type="textarea" name="catatan_perawatan" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" placeholder="Catatan Perawatan">
                </div>
            </div>
            <div class="w-full flex justify-end">
                <a class="px-4 py-2 bg-[#af0e0e] hover:bg-[#c11f1f] no-underline rounded text-white" href="{{ route('perawatan_alat.index') }}">Cancel</a>
                <button type="submit" class="ml-5 px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded text-white">Submit</button>
            </div>
                      
        </form>
    </div>
</div>
@endsection