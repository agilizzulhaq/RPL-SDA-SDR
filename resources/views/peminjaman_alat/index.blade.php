@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpeminjaman')
@endsection

@section('isi')
    <div class="w-[1060px]">
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
       
        <table class="table table-bordered">
            <tr>
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
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $peminjamanalat->kode_alat }}</td>
                <td>{{ $peminjamanalat->nama_alat }}</td>
                <td>{{ $peminjamanalat->nama_peminjam }}</td>
                <td>{{ $peminjamanalat->tanggal_peminjam }}</td>
                <td>{{ $peminjamanalat->status_peminjaman }}</td>
                <td>{{ $peminjamanalat->alasan_peminjaman }}</td>
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
