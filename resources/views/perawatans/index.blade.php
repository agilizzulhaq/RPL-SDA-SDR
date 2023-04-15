@extends('../layout2/main')

@section('nav')
    @include('../layout2/navperawatan')
@endsection

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD Perawatan Alat Kesehatan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('perawatans.create') }}"> Tambahkan data perawatan</a>
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
                <th>ID Admin</th>
                <th>ID Keeper</th>
                <th>ID User</th>
                <th>Nama Alat</th>
                <th>Lokasi Alat</th>
                <th>Jenis Perawatan</th>
                <th>Status Perawatan</th>
                <th>Riwayat Perawatan</th>
                <th>Catatan Perawatan</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($perawatans as $perawatan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $perawatan->kode_alat }}</td>
                <td>{{ $perawatan->id_admin }}</td>
                <td>{{ $perawatan->id_keeper }}</td>
                <td>{{ $perawatan->id_user }}</td>
                <td>{{ $perawatan->nama_alat }}</td>
                <td>{{ $perawatan->lokasi_alat }}</td>
                <td>{{ $perawatan->jenis_perawatan }}</td>
                <td>{{ $perawatan->status_perawatan }}</td>
                <td>{{ $perawatan->riwayat_perawatan }}</td>
                <td>{{ $perawatan->catatan_perawatan }}</td>
                <td>
                    <form action="{{ route('perawatans.destroy',$perawatan->kode_alat) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('perawatans.show',$perawatan->kode_alat) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('perawatans.edit',$perawatan->kode_alat) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      
        {!! $perawatans->links() !!}
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
