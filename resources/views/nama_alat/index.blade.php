@extends('../layout2/mainnew')

@section('isi')
<h1 class="mt-20 text-white font-bold text-4xl ml-12 mb-5">Data Nama Alat</h1>
  <div class="container">
    <a href="{{ route('nama_alat.create') }}" class="btn btn-success mb-2">Tambah +</a>
      {{-- <div class="row g-3 align-items-center">
        <div class="col-auto">
          <form action="/nama_alat" method="GET">
            <input type="search" id="inputSearch" name="search" class="form-control" aria-labelledby="searchHelpInline">
          </form>
        </div>
      </div> --}}
      <div class="row text-white mt-4 rounded-md overflow-auto">
        <table class="table text-white">
          <thead class="bg-[#11101d] text-center">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Nama Alat</th>
              <th scope="col">Nama Alat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            @php
              $no = 1;
            @endphp
            @foreach ($nama_alat as $alat => $row)
              <tr class="border-b border-gray-500">
                <th scope="row" class="text-white ">{{$alat + $nama_alat -> firstItem()}}</th>
                <td class="text-white ">{{$row -> kode_nama_alat}}</td>
                <td class="text-white ">{{$row -> nama_alat}}</td>
                <td class="text-white ">
                    <form action="{{ route('nama_alat.destroy',$row->kode_nama_alat) }}" method="POST">
        
                        <a href="{{ route('nama_alat.edit',$row->kode_nama_alat) }}" class="btn btn-primary">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $nama_alat->links() }}
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