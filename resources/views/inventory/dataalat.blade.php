@extends('../layout2/mainnew')


@section('isi')
<h1 class="mt-20 text-white font-bold text-4xl ml-12 mb-5">Data Alat</h1>
  
  <div class="container">   

    <a href="/tambahalat" class="btn btn-success">Tambah +</a>
    <div>
        <div class="row text-white mt-4 rounded-md overflow-auto">
          <table class="table text-white">
            <thead class="bg-[#11101d] text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Alat</th>
                <th scope="col">Nama Alat</th>
                <th scope="col">Lokasi Alat</th>
                <th scope="col">Stok / Limit</th>
                <th scope="col">Jenis Alat</th>
                <th scope="col">Pemakaian Alat</th>
                <th scope="col">Kondisi Alat</th>
                <th scope="col">Status Alat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              @php
                $no = 1;
              @endphp
              @foreach ($data as $alat => $row)
                <tr class="border-b border-gray-500">
                  <th scope="row">{{$alat + $data -> firstItem()}}</th>
                  <td class="text-white">{{$row -> kodeAlat}}</td>
                  <td class="text-white">{{$row ->nama_alat->nama_alat }}</td>
                  <td class="text-white">{{$row -> lokasiAlat}}</td>
                  <td class="text-white">{{$row -> stok}} / {{$row -> limit}}</td>
                  <td class="text-white">{{$row -> jenisAlat}}</td>
                  <td class="text-white">{{$row -> pemakaianAlat}}</td>
                  <td class="text-white">{{$row -> kondisiAlat}}</td>
                  <td class="text-white">{{$row -> statusAlat}}</td>
                  <td>
                    <a href="/editalat/{{$row -> id}}" class="btn btn-secondary">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{$row -> id}}" data-nama="{{$row ->nama_alat->nama_alat}}">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        </div>
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