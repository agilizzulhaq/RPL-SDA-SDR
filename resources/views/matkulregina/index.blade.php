@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">  
  <div class="flex justify-between items-start">
    <h1 class="text-black font-bold text-3xl mb-5">Data Matkul</h1>
    <div class="flex gap-3 items-center">
      <div class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] ease-in-out transition duration-150 text-center rounded-full">
        <a href="{{ route('matkulregina.create') }}" class="text-4xl no-underline text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">+</a>
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
  <div>
    <div class="rounded-lg overflow-x-auto border-1 border-slate-300">
      <table class="w-full text-sm text-left text-blue-100">
        <thead class="text-xs text-white text-center uppercase bg-[#5479f7]">
          <tr>
            <th scope="col" class="px-3 py-3">No</th>
            <th scope="col" class="px-3 py-3">Nama Matkul</th>
            <th scope="col" class="px-3 py-3"></th>
          </tr>
        </thead>
        <tbody class="text-black text-center">
          @php
            $no = 1;
          @endphp
          @foreach ($matkulregina as $matkul => $row)
            <tr class="{{ ($matkul+1)%2 == 0 ? 'bg-white border-b-2 border-gray-300' : '' }}">
              <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">{{$matkul + $matkulregina -> firstItem()}}</th>
              <td class="px-3 py-2">{{$row -> namamatkul}}</td>
              <td class="px-3 py-2">
                <div class="rounded-md group py-1 hover:bg-[#f5f5f5] cursor-pointer w-10">
                  <span class="material-icons">more_vert</span>
                  <form class="shadow-md p-1 hidden z-[9000] group-hover:block mt-1 rounded-md absolute bg-white" action="{{ route('matkulregina.destroy',$row->id) }}" method="POST">
        
                        <a href="{{ route('matkulregina.edit',$row->id) }}"><i class='bx bx-edit text-2xl text-black hover:bg-[#eaeaea] p-1 rounded'></i></a>
        
                        @csrf
                        @method('DELETE')
          
                        <button type="submit"><i class='bx bx-trash text-2xl text-black hover:bg-[#eaeaea] p-1 rounded' ></i></button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $matkulregina->links() }}
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