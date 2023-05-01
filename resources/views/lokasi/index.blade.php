<<<<<<< HEAD:resources/views/lokasi_ruangan/index.blade.php
@extends('../layout2/mainnew')
=======
@extends('../layout2/main')

@section('nav')
    @include('../layout2/navmdlokasi')
@endsection
>>>>>>> 55855882647e2a50d32a251f753741ade7551045:resources/views/lokasi/index.blade.php

@section('isi')
<h1>Tambah Data Lokasi</h1>
  <div class="container">
    <a href="{{ route('lokasi.create') }}" class="btn btn-success mb-2">Tambah +</a>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <form action="/lokasi" method="GET">
            <input type="search" id="inputSearch" name="search" class="form-control" aria-labelledby="searchHelpInline">
          </form>
        </div>
      </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Lokasi</th>
              <th scope="col">Nama Gedung</th>
              <th scope="col">Nama Lantai</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($lokasi as $alat => $row)
              <tr>
                <th scope="row">{{$alat + $lokasi -> firstItem()}}</th>
                <td>{{$row -> kode_lokasi}}</td>
                <td>{{$row -> nama_gedung}}</td>
                <td>{{$row -> lantai}}</td>
                <td>
                    <form action="{{ route('lokasi.destroy',$row->kode_lokasi) }}" method="POST">
        
                        <a href="{{ route('lokasi.edit',$row->kode_lokasi) }}" class="btn btn-primary">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $lokasi->links() }}
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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