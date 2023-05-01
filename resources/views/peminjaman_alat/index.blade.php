@extends('../layout2/mainnew')

@section('isi')
    <div class="w-full mt-20 text-white font-bold text-4xl mb-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Peminjaman Alat Kesehatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('peminjaman_alat.create') }}"> Tambahkan data peminjaman alat</a>
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
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status Peminjaman</th>
                    <th>Alasan Peminjaman</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($peminjaman_alat as $peminjamanalat)
                <tr class="text-center border-b border-gray-500">
                    <td  class="text-white">{{ ++$i }}</td>
                    <td  class="text-white">{{ $peminjamanalat->kode_alat }}</td>
                    <td  class="text-white">{{ $peminjamanalat->nama_alat }}</td>
                    <td  class="text-white">{{ $peminjamanalat->nama_peminjam }}</td>
                    <td  class="text-white">{{ $peminjamanalat->tanggal_peminjam }}</td>
                    <td  class="text-white">{{ $peminjamanalat->status_peminjaman }}</td>
                    <td  class="text-white">{{ $peminjamanalat->alasan_peminjaman }}</td>
                    <td>
                        <form action="{{ route('peminjaman_alat.destroy',$peminjamanalat->kode_alat) }}" method="POST">
           
                            <a class="btn btn-info" href="{{ route('peminjaman_alat.show',$peminjamanalat->kode_alat) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('peminjaman_alat.edit',$peminjamanalat->kode_alat) }}">Edit</a>
           
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
