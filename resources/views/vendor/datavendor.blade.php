@extends('layout2.main')

@section('nav')
    @include('layout2.navmdvendor')
@endsection
@section('isi')
    <h1>Data Vendor</h1>
        <div class="container">
            <a href="/addvendor" class="btn btn-primary mb-2">Tambah Data</a>
            <div class="row g-3 align-items-center">
              <div class="col-auto">
              </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Vendor</th>
                        <th scope="col">Nama Vendor</th>
                        <th scope="col">Alamat Vendor</th>
                        <th scope="col">Email Vendor</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp
                        @foreach ($data as $vendor => $row)
                        <tr>
                            <th scope="row">{{$vendor + $data -> firstItem()}}</th>
                            <td>{{$row -> id_vendor}}</td>
                            <td>{{$row -> nama_vendor}}</td>
                            <td>{{$row -> alamat_vendor}}</td>
                            <td>{{$row -> email_vendor}}</td>
                            <td>{{$row -> nomor_telepon}}</td>
                            <td>
                                <a href="/editvendor/{{$row -> id}}" class="btn btn-secondary">Edit</a>
                                <a href="#" class="btn btn-danger delete" data-id="{{$row -> id}}" data-nama="{{$row -> nama_vendor}}">Hapus</a>
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
  </body>
  <script>
    $('.delete').click(function(){
      var idvendor = $(this).attr('data-id');
      var namavendor = $(this).attr('data-nama');
      swal({
        title: "Apakah Anda yakin?",
        text: "Anda akan menghapus data vendor dengan nama "+namavendor+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletevendor/"+idvendor+""
          swal("Data vendor berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Penghapusan data vendor dibatalkan");
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