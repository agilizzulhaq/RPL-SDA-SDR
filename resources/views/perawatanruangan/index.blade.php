@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <div class="flex justify-between items-start">
            <h1 class="text-black font-bold text-3xl mb-5">Data Perawatan Ruangan</h1>
            <div class="flex gap-3 items-center">
                @if($userLevel!=3)
                <div class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] ease-in-out transition duration-150 text-center rounded-full">
                  <a href="{{ route('perawatanruangan.create') }}" class="text-4xl no-underline text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">+</a>
                </div>
                @endif
                {{-- <div id="edit" class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
                  <span class="material-icons text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">edit</span>
                </div> --}}
                <div class="">
                  <div class="h-10 w-20 min-w-[200px]">
                      <input type="text" class="px-3 py-[10px] block w-full border-gray-200 rounded-full text-sm bg-white" placeholder="Search">
                    </div>
                </div>
              </div>
            </div>
        </div> 

        <div class="rounded-lg overflow-x-auto border-1 border-slate-300">
            <table class="w-full text-sm text-left text-blue-100">
                <thead class="text-xs text-white text-center uppercase bg-[#5479f7]">
                    <tr class="text-center border-b-2 border-white">
                        <th scope="col" class="px-3 py-3">No</th>
                        <th scope="col" class="px-3 py-3">Id Perawatan</th>
                        <th scope="col" class="px-3 py-3">Kode Ruangan</th>
                        <th scope="col" class="px-3 py-3">Nama Ruangan</th>
                        <th scope="col" class="px-3 py-3">Lokasi Ruangan</th>
                        <th scope="col" class="px-3 py-3">Kondisi</th>
                        <th scope="col" class="px-3 py-3">Terakhir dirawat</th>
                        <th scope="col" class="px-3 py-3">Status</th>
                        <th class="px-3 py-3"></th>
                    </tr>
                </thead>
                <tbody class="text-black text-center">
                    @foreach ($perawatanruangan as $index => $row)
                    <tr class="{{ ($index+1)%2 == 0 ? 'bg-white border-b-2 border-gray-300' : '' }}">
                        <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">{{ $index + $perawatanruangan->firstItem() }}</th>
                        <td scope="row" class="px-3 py-2">{{ $row->id_perawatan }}</td>
                        <td scope="row" class="px-3 py-2">{{ $row->kodeRuangan }}</td>
                        <td>
                            @foreach ($room as $item)
                                @if ($item->kodeRuangan === $row->kodeRuangan)
                                    {{ $item->namaRuangan }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($room as $item)
                                @if ($item->kodeRuangan === $row->kodeRuangan)
                                    {{ $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai }}
                                @endif
                            @endforeach
                        </td>
                        <td scope="row" class="px-3 py-2">{{ (($row->kondisi=='B') ? 'Baik' : (($row->kondisi=='S') ? 'Sedang' : 'Rusak')) }}</td>
                        <td scope="row" class="px-3 py-2">{{ $row->history }}</td>
                        <td scope="row" class="px-3 py-2">{{ $row->statusperawatan }}</td>
                        <td class="px-3 py-2">
                            @if($userLevel==2)
                            <div class="rounded-md group py-1 hover:bg-[#f5f5f5] cursor-pointer w-10">
                                <span class="material-icons">more_vert</span>
                                <div>
                                    <form class="shadow-md p-1 hidden z-[9000] group-hover:block mt-1 rounded-md absolute bg-white" action="{{ route('perawatanruangan.destroy',$row->id_perawatan) }}" method="POST">
                       
                                        {{-- <a class="btn btn-info" href="{{ route('perawatanruangan.show',$perawatanruangan->id_perawatan) }}">Show</a> --}}
                        
                                        <a href="{{ route('perawatanruangan.edit',$row->id_perawatan) }}"><i class='bx bx-edit text-2xl text-black hover:bg-[#eaeaea] p-1 rounded'></i></a>
                       
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit"><i class='bx bx-trash text-2xl text-black hover:bg-[#eaeaea] p-1 rounded' ></i></button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $perawatanruangan->links() }}
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
