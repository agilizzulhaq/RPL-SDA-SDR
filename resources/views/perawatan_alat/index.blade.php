@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <div class="flex justify-between items-start">
            <h1 class="text-black font-bold text-3xl mb-5">Perawatan Alat Kesehatan</h1>
            <div class="flex gap-3 items-center">
                @if($userLevel!=3)
              <div class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] ease-in-out transition duration-150 text-center rounded-full">
                <a href="{{ route('perawatan_alat.create') }}" class="text-4xl no-underline text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">+</a>
              </div>
              @endif
              {{-- @if($userLevel==2)
              <div id="edit" class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
                <span class="material-icons text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">edit</span>
              </div>
              @endif --}}
              <form action="/sda/perawatan_alat" class="h-10 w-20 min-w-[200px]">
                <input type="text" name="keyword" value="{{ request('keyword') }}" class="px-3 py-[10px] text-black block w-full border-gray-200 rounded-full text-sm bg-white" placeholder="Search">
              </form>
            </div>
        </div> 
        <div class="rounded-lg overflow-x-auto border-1 border-slate-300">
            <table class="w-full text-sm text-left text-blue-100">
                <thead class="text-xs text-white text-center uppercase bg-[#5479f7]">
                    <tr class="text-center border-b-2 border-white">
                        <th class="px-3 py-3">No</th>
                        <th class="px-3 py-3">ID Perawatan</th>
                        <th class="px-3 py-3">Kode Alat</th>
                        <th class="px-3 py-3">Nama Alat</th>
                        <th class="px-3 py-3">Jenis Perawatan</th>
                        <th class="px-3 py-3">Status Perawatan</th>
                        <th class="px-3 py-3">Tanggal Perawatan</th>
                        <th class="px-3 py-3">Riwayat Perawatan</th>
                        <th class="px-3 py-3">Catatan Perawatan</th>
                        <th class="px-3 py-3"></th>
                    </tr>
                </thead>
                <tbody class="text-black text-center">
                    @foreach ($perawatan_alat as $key => $perawatan)

                    <tr class="{{ ($key+1)%2 == 0 ? 'bg-white border-b-2 border-gray-300' : '' }}">
                        <td class="px-3 py-2">{{ ++$i }}</td>
                        <td class="px-3 py-2">{{ $perawatan->id_perawatan }}</td>
                        <td class="px-3 py-2">{{ $perawatan->kodeAlat }}</td>
                        <td class="px-3 py-2">{{ $perawatan->nama_alat }}</td>
                        <td class="px-3 py-2">{{ $perawatan->jenis_perawatan }}</td>
                        <td class="px-3 py-2">{{ $perawatan->status_perawatan }}</td>
                        <td class="px-3 py-2">{{ $perawatan->tanggal_perawatan }}</td>
                        <td class="px-3 py-2">{{ $perawatan->riwayat_perawatan }}</td>
                        <td class="px-3 py-2">{{ $perawatan->catatan_perawatan }}</td>
                        <td class="px-3 py-2">
                            @if($userLevel==2)
                            <div class="rounded-md group py-1 hover:bg-[#f5f5f5] cursor-pointer w-10">
                                <span class="material-icons">more_vert</span>
                                <form class="shadow-md p-1 hidden z-[9000] group-hover:block mt-1 rounded-md absolute bg-white" action="{{ route('perawatan_alat.destroy',$perawatan->id_perawatan) }}" method="POST">
                   
                                    {{-- <a class="btn btn-info" href="{{ route('perawatan_alat.show',$perawatan->id_perawatan) }}">Show</a> --}}
                    
                                    <a href="{{ route('perawatan_alat.edit',$perawatan->id_perawatan) }}"><i class='bx bx-edit text-2xl text-black hover:bg-[#eaeaea] p-1 rounded'></i></a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit"><i class='bx bx-trash text-2xl text-black hover:bg-[#eaeaea] p-1 rounded' ></i></button>
                                </form>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $perawatan_alat->links() }}
        </div>
    </div>
      
@endsection

{{-- <script>
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
</script> --}}
