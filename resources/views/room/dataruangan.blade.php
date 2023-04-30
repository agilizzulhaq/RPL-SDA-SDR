@extends('../layout2/main')

@section('nav')
    @include('../layout2/navsdr')
@endsection

@section('isi')
    <h1 class="text-center mt-4 mb-4">Data Ruangan</h1>
        <div class="container">
            <a href="/tambahruangan" class="btn btn-success mb-2">Tambah +</a>
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <form action="/ruangan" method="GET">
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
                        <th scope="col">Kode Ruangan</th>
                        <th scope="col">Jenis Ruangan</th>
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">Lokasi Ruangan</th>
                        <th scope="col">Status Ruangan</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp
                        @foreach ($data as $ruangan => $row)
                        <tr>
                            <th scope="row">{{$ruangan + $data -> firstItem()}}</th>
                            <td>{{$row -> kodeRuangan}}</td>
                            <td>{{$row -> jenisRuangan}}</td>
                            <td>{{$row -> namaRuangan}}</td>
                            <td>{{$row -> lokasiRuangan}}</td>
                            <td>{{$row -> statusRuangan}}</td>
                            <td>{{$row -> created_at -> diffForHumans()}}</td>
                            <td>
                                <a href="/editruangan/{{$row -> id}}" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger delete" data-id="{{$row -> id}}" data-nama="{{$row -> namaRuangan}}">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $data -> links() }}
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
      $('.delete').click(function(){
        var idruangan = $(this).attr('data-id');
        var namaruangan = $(this).attr('data-nama');
        swal({
          title: "Apakah Anda yakin?",
          text: "Anda akan menghapus data ruangan dengan nama "+namaruangan+" ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/hapusruangan/"+idruangan+""
            swal("Data ruangan berhasil dihapus", {
              icon: "success",
            });
          } else {
            swal("Penghapusan data ruangan dibatalkan");
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