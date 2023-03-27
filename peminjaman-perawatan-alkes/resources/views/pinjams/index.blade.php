@extends('pinjams.layout')
 
@section('content')
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
            <th>Kode Alat</th>
            <th>Nama Alat</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjams as $pinjam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pinjam->kodealat }}</td>
            <td>{{ $pinjam->namaalat }}</td>
            <td>{{ $pinjam->namapeminjam }}</td>
            <td>{{ $pinjam->tanggalpinjam }}</td>
            <td>
                <form action="{{ route('pinjams.destroy',$pinjam->kodealat) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pinjams.show',$pinjam->kodealat) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pinjams.edit',$pinjam->kodealat) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pinjams->links() !!}
      
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
