@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">  
  <div class="flex justify-between items-start">
    <h1 class="text-white font-bold text-3xl mb-5">Data Nama Alat</h1>
    <div class="flex gap-3 items-center">
      <div class="w-10 h-10 bg-[#1e6261] hover:bg-[#184D4C] ease-in-out transition duration-150 text-center rounded-full">
        <a href="{{ route('nama_alat.create') }}" class="text-4xl no-underline text-white">+</a>
      </div>
      <div id="edit" class="w-10 h-10 bg-[#1e6261] hover:bg-[#184D4C] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
        <span class="material-icons">edit</span>
      </div>
      <div class="">
        <div class="relative h-10 w-20 min-w-[200px]">
          <input
            class="peer h-full w-full rounded-[7px] bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-white focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
          />
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-white peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-white peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-white peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Search
          </label>
        </div>
      </div>
    </div>

  </div>
  <div>
    <div>
      <table class="w-full leading-10 text-sm text-white">
        <thead class="text-center  border-b-2 border-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Nama Alat</th>
            <th scope="col">Nama Alat</th>
            <th class="border-b-2 border-[#1d1b31] w-32" scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          @php
            $no = 1;
          @endphp
          @foreach ($nama_alat as $alat => $row)
            <tr>
              <th scope="row" class="text-white">{{$alat + $nama_alat -> firstItem()}}</th>
              <td class="text-white">{{$row -> kode_nama_alat}}</td>
              <td class="text-white">{{$row -> nama_alat}}</td>
              <td id="hapus-edit" class="text-white">
                  <form action="{{ route('nama_alat.destroy',$row->kode_nama_alat) }}" method="POST">
      
                      <a href="{{ route('nama_alat.edit',$row->kode_nama_alat) }}"><i class='bx bx-edit text-2xl text-white hover:bg-slate-700 bg-slate-600 p-1 rounded'></i></a>
      
                      @csrf
                      @method('DELETE')
        
                      <button type="submit" class="ml-3"><i class='bx bx-trash text-2xl text-grey-200 bg-slate-600 hover:bg-slate-700 p-1 rounded' ></i></button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $nama_alat->links() }}
    </div>
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
    // function confirmDelete() {
    //     return confirm("Apakah ingin menghapus data ini?");
    // }

    // // cek apakah variabel session confirmDelete bernilai true
    // @if(session('confirmDelete'))
    //     if (confirmDelete()) {
    //         alert("Data telah dihapus!");
    //     }
    // @endif

    
</script>