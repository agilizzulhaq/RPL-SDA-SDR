@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpeminjaman')
@endsection

@section('isi')
    <div class="w-[1060px]">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD Peminjaman Alat Kesehatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('pinjams.create') }}"> Tambahkan data pinjam</a>
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
                <th>ID Admin</th>
                <th>ID User</th>
                <th>Kode Alat</th>
                <th>Nama Alat</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Status Peminjaman</th>
                <th>Alasan Peminjaman</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($pinjams as $pinjam)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pinjam->kode_alat }}</td>
                <td>{{ $pinjam->id_admin }}</td>
                <td>{{ $pinjam->id_user }}</td>
                <td>{{ $pinjam->nama_alat }}</td>
                <td>{{ $pinjam->nama_peminjam }}</td>
                <td>{{ $pinjam->tanggal_peminjam }}</td>
                <td>{{ $pinjam->status_peminjaman }}</td>
                <td>{{ $pinjam->alasan_peminjaman }}</td>
                <td>
                    <form action="{{ route('pinjams.destroy',$pinjam->kode_alat) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('pinjams.show',$pinjam->kode_alat) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('pinjams.edit',$pinjam->kode_alat) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      
        {!! $pinjams->links() !!}
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
