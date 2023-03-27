@extends('perawatans.layout')
 
@section('content')
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
            <th>Nama Alat</th>
            <th>Lokasi Alat</th>
            <th>Jenis Perawatan</th>
            <th>Catatan Perawatan</th>
            <th>Tanggal Perawatan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($perawatans as $perawatan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $perawatan->kodealat }}</td>
            <td>{{ $perawatan->namaalat }}</td>
            <td>{{ $perawatan->lokasialat }}</td>
            <td>{{ $perawatan->jenisperawatan }}</td>
            <td>{{ $perawatan->catatanperawatan }}</td>
            <td>{{ $perawatan->tanggalperawatan }}</td>
            <td>
                <form action="{{ route('perawatans.destroy',$perawatan->kodealat) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('perawatans.show',$perawatan->kodealat) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('perawatans.edit',$perawatan->kodealat) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $perawatans->links() !!}
      
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
