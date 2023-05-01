@extends('../layout2/mainnew')

@section('isi')
    <div class="w-full mt-20 text-white font-bold text-4xl mb-5">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Perawatan Alat Kesehatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('perawatan_alat.create') }}"> Tambahkan data perawatan</a>
                </div>
            </div>
        </div>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       
        <div class="mt-4 rounded-md overflow-auto">
            <table class="table text-white">
                <tr class="bg-[#11101d] text-center">
                    <th>No</th>
                    <th>Kode Alat</th>
                    <th>Nama Alat</th>
                    <th>Lokasi Alat</th>
                    <th>Jenis Perawatan</th>
                    <th>Status Perawatan</th>
                    <th>Riwayat Perawatan</th>
                    <th>Catatan Perawatan</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($perawatan_alat as $perawatan)
                <tr class="text-center border-b border-gray-500">
                    <td class="text-white">{{ ++$i }}</td>
                    <td class="text-white">{{ $perawatan->kode_alat }}</td>
                    <td class="text-white">{{ $perawatan->nama_alat }}</td>
                    <td class="text-white">{{ $perawatan->lokasi_alat }}</td>
                    <td class="text-white">{{ $perawatan->jenis_perawatan }}</td>
                    <td class="text-white">{{ $perawatan->status_perawatan }}</td>
                    <td class="text-white">{{ $perawatan->riwayat_perawatan }}</td>
                    <td class="text-white">{{ $perawatan->catatan_perawatan }}</td>
                    <td>
                        <form action="{{ route('perawatan_alat.destroy',$perawatan->kode_alat) }}" method="POST">
           
                            <a class="btn btn-info" href="{{ route('perawatan_alat.show',$perawatan->kode_alat) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('perawatan_alat.edit',$perawatan->kode_alat) }}">Edit</a>
           
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
      
@endsection

<script>
    // fungsi untuk menampilkan pop-up konfirmasi
    function confirmDelete() {
        return confirm("Apakah ingin menghapus data ini?");
    }

    // cek apakah variabel session confirmDelete bernilai true
    @if(session('confirmDelete'))
        if (confirmDelete()) {
            alert("Data telah dihapus!");
        }
    @endif
</script>
