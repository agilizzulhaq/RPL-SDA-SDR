@extends('../layout2/mainnew')

@section('isi')
    {{-- <div class="row w-full text-white font-bold text-4xl mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="mt-20">Daftar Pembelian Alat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pembelian.create') }}"> Tambah Pembelian Alat</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
<div class="mt-16 mx-10">
    <div class="flex justify-between items-start">
        <h1 class="text-black font-bold text-3xl mb-5">Pengadaan Alat Kesehatan</h1>
        <div class="flex gap-3 items-center">
            @if($userLevel!=3)
          <div class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] ease-in-out transition duration-150 text-center rounded-full">
            <a href="{{ route('pembelian.create') }}" class="text-4xl no-underline text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">+</a>
          </div>
          @endif
        {{-- @if($userLevel == 2)
          <div id="edit" class="w-10 h-10 bg-[#5479f7] drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
            <span class="material-icons text-white drop-shadow-[0_3px_2px_rgba(0,0,0,0.4)]">edit</span>
          </div>
        @endif --}}
          <form action="/sda/pembelian" class="h-10 w-20 min-w-[200px]">
            <input type="text" name="keyword" value="{{ request('keyword') }}" class="px-3 py-[10px] text-black block w-full border-gray-200 rounded-full text-sm bg-white" placeholder="Search">
          </form>
        </div>
    </div> 
    <div class="rounded-lg overflow-x-auto border-1 border-slate-300">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-white text-center uppercase bg-[#5479f7]">
                <tr class="text-center border-b-2 border-white">
                    <th scope="col" class="px-3 py-3">No</th>
                    <th scope="col" class="px-3 py-3">ID Pembelian</th>
                    <th scope="col" class="px-3 py-3">Nama Alat</th>
                    <th scope="col" class="px-3 py-3">Tanggal Beli</th>
                    <th scope="col" class="px-3 py-3">Vendor</th>
                    <th scope="col" class="px-3 py-3">Harga Satuan</th>
                    <th scope="col" class="px-3 py-3">Jumlah Beli</th>
                    <th scope="col" class="px-3 py-3">Keterangan</th>
                    <th scope="col" class="px-3 py-3">Status</th>
                    <th scope="col" class="px-3 py-3" ></th>
                </tr>
            </thead>
            <tbody class="text-center text-black ">
                @foreach ($pembelians as $key => $pembelian)
                <tr class="{{ ($key+1)%2 == 0 ? 'bg-white border-b-2 border-gray-300' : '' }}">
                    <td class="px-3 py-3">{{ ++$i }}</td>
                    <td class="px-3 py-3">{{ $pembelian->id_pembelian }}</td>
                    <td class="px-3 py-3">{{ $pembelian->nama_alat }}</td>
                    <td class="px-3 py-3">{{ $pembelian->tanggal_pembelian }}</td>
                    <td class="px-3 py-3">{{ $pembelian->nama_vendor }}</td>
                    <td class="px-3 py-3">{{ $pembelian->harga_satuan }}</td>
                    <td class="px-3 py-3">{{ $pembelian->jumlah_pembelian }}</td>
                    <td class="px-3 py-3">{{ $pembelian->keterangan }}</td>
                    <td class="px-3 py-3">{{ $pembelian->status }}</td>
                    <td>
                        @if ($userLevel==2)
                        <div class="rounded-md group py-1 hover:bg-[#f5f5f5] cursor-pointer w-10">
                            <span class="material-icons">more_vert</span>
                            <div class="shadow-md p-1 hidden z-[9000] group-hover:block mt-1 rounded-md absolute bg-white">
                                <form action="{{ route('pembelian.destroy',$pembelian->id_pembelian) }}" method="POST">
                   
                                    {{-- <a class="btn btn-info" href="{{ route('pembelian.show',$pembelian->id_pembelian) }}">Show</a> --}}
                    
                                    <a href="{{ route('pembelian.edit',$pembelian->id_pembelian) }}"><i class='bx bx-edit text-2xl text-black hover:bg-[#eaeaea] p-1 rounded'></i></a>
                   
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
    
    </div>
    
    {!! $pembelians->links() !!}
</div>
   
      
@endsection