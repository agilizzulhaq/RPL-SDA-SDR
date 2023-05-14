@extends('../layout2/mainnew')


@section('isi')
<div class="mt-16 mx-10">
  <div class="flex justify-between items-start">
    <h1 class="text-black font-bold text-3xl mb-5">Data Alat</h1>
    <div class="flex gap-3 items-center">
      <div class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] ease-in-out transition duration-150 text-center rounded-full">
        <a href="/tambahalat" class="text-4xl no-underline text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">+</a>
      </div>
      <div id="edit" class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
        <span class="material-icons text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">edit</span>
      </div>
      <div class="">
        <div class="h-10 w-20 min-w-[200px]">
          <input type="text" class="px-3 py-[10px] block w-full border-gray-200 rounded-full text-sm bg-white" placeholder="Search">
        </div>
      </div>
    </div>
  </div>  
  <div class="rounded-lg overflow-x-auto border-1 border-slate-300">
    <table class="w-full text-sm text-left text-blue-100">
      <thead class="text-xs text-white text-center uppercase bg-[#5479f7]">
        <tr>
          <th scope="col" class="px-3 py-3">No</th>
          <th scope="col" class="px-3 py-3">Kode Alat</th>
          <th scope="col" class="px-3 py-3">Nama Alat</th>
          <th scope="col" class="px-3 py-3">Lokasi Alat</th>
          <th scope="col" class="px-3 py-3">Kondisi Alat</th>
          <th scope="col" class="px-3 py-3">Status Alat</th>
          <th scope="col" class="px-3 py-3"></th>
        </tr>
      </thead>
      <tbody class="text-center text-black ">
        @foreach ($data as $alat => $row)
          <tr class="{{ ($alat+1)%2 == 0 ? 'bg-white border-b-2 border-gray-300' : '' }}">
            <th class="px-3 py-2 font-medium whitespace-nowrap" scope="row">{{$alat + $data -> firstItem()}}</th>
            <td class="px-3 py-2">{{$row -> kodeAlat}}</td>
            <td class="px-3 py-2">{{$row -> nama_alat-> nama_alat }}</td>
            <td class="px-3 py-2">{{ " Ruang " . $row -> room -> namaRuangan ." ". $row -> room -> lokasi -> nama_gedung . " Lantai " . $row -> room -> lokasi -> lantai }}</td>
            <td class="px-3 py-2">{{$row -> kondisiAlat}}</td>
            <td class="px-3 py-2">{{$row -> statusAlat}}</td>
            <td>
              <div class="rounded-md group py-1 hover:bg-[#f5f5f5] cursor-pointer w-10">
                <span class="material-icons">more_vert</span>
                <div class="shadow-md p-1 hidden z-[9000] group-hover:block mt-1 rounded-md absolute bg-white">
                  <a href="/editalat/{{$row -> kodeAlat}}"><i class='bx bx-edit text-2xl text-black hover:bg-[#eaeaea] p-1 rounded'></i></a>
                  <a href="/deletealat/{{$row -> kodeAlat}}" data-id="{{$row -> kodeAlat}}" data-nama="{{$row -> nama_alat -> nama_alat}}"><i class='bx bx-trash text-2xl text-black hover:bg-[#eaeaea] p-1 rounded' ></i></a>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
</div>
{{-- <h1 class="mt-20 text-white font-bold text-4xl ml-12 mb-5">Data Alat</h1> --}}
  
  
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