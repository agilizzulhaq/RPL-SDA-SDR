@extends('../layout2/main')

@section('nav')
    @include('../layout2/navsda')
@endsection

@section('isi')
    <h1 class="text-center mt-4 mb-4">Data Alat</h1>
        <div class="container">
            <a href="/tambahalat" class="btn btn-success mb-2">Tambah +</a>
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <form action="/alat" method="GET">
                  <input type="search" id="inputSearch" name="search" class="form-control" aria-labelledby="searchHelpInline">
                </form>
              </div>
            </div>
            <div class="row">
              {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{ $message }}
                </div>
              @endif --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Alat</th>
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Lokasi Alat</th>
                        <th scope="col">Jenis Alat</th>
                        <th scope="col">Pemakaian Alat</th>
                        <th scope="col">Kondisi Alat</th>
                        <th scope="col">Status Alat</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp
                        @foreach ($data as $alat => $row)
                        <tr>
                            <th scope="row">{{$alat + $data -> firstItem()}}</th>
                            <td>{{$row -> kodeAlat}}</td>
                            <td>{{$row -> namaAlat}}</td>
                            <td>{{$row -> lokasiAlat}}</td>
                            <td>{{$row -> jenisAlat}}</td>
                            <td>{{$row -> pemakaianAlat}}</td>
                            <td>{{$row -> kondisiAlat}}</td>
                            <td>{{$row -> statusAlat}}</td>
                            <td>{{$row -> created_at -> diffForHumans()}}</td>
                            <td>
                                <a href="/editalat/{{$row -> id}}" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger delete" data-id="{{$row -> id}}" data-nama="{{$row -> namaAlat}}">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    $('.delete').click(function(){
      var inventoryid = $(this).attr('data-id');
      var inventorynama = $(this).attr('data-nama');
      swal({
        title: "Apakah Anda yakin?",
        text: "Anda akan menghapus data alat dengan nama "+inventorynama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/hapusalat/"+inventoryid+""
          swal("Data alat berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Penghapusan data dibatalkan");
        }
      });
    });
  </script>
  <script>
    @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
    @endif
  </script>
@endsection