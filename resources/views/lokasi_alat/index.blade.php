@extends('../layout2/main')

@section('nav')
    @include('../layout2/navsda')
@endsection

@section('isi')
<h1>Data Alat</h1>
  <div class="container">
    <a href="{{ route('lokasi_alat.create') }}" class="btn btn-success mb-2">Tambah +</a>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <form action="/lokasi_alat" method="GET">
            <input type="search" id="inputSearch" name="search" class="form-control" aria-labelledby="searchHelpInline">
          </form>
        </div>
      </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Lokasi Alat</th>
              <th scope="col">Lokasi Alat</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($lokasi_alat as $alat => $row)
              <tr>
                <th scope="row">{{$alat + $lokasi_alat -> firstItem()}}</th>
                <td>{{$row -> kode_lokasi_alat}}</td>
                <td>{{$row -> lokasi_alat}}</td>
                <td>
                    <form action="{{ route('lokasi_alat.destroy',$row->kode_lokasi_alat) }}" method="POST">
        
                        <a href="{{ route('lokasi_alat.edit',$row->kode_lokasi_alat) }}" class="btn btn-primary">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $lokasi_alat->links() }}
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