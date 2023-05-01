@extends('../layout2/mainnew')

@section('isi')
    <div class="row w-full text-white font-bold text-4xl mb-5">
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
    @endif
   
    <div class="mt-4 rounded-md overflow-auto">
        <table class="table text-white">
            <tr class="bg-[#11101d] text-center">
                <th>No</th>
                <th>ID Pembelian Alat</th>
                <th>Nama Alat</th>
                <th>Tanggal Pembelian</th>
                <th>Vendor</th>
                <th>Harga</th>
                <th>Alasan</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($pembelians as $pembelian)
            <tr class="text-center border-b border-gray-500">
                <td  class="text-white">{{ ++$i }}</td>
                <td  class="text-white">{{ $pembelian->idPembelianAlat }}</td>
                <td  class="text-white">{{ $pembelian->namaAlat }}</td>
                <td  class="text-white">{{ $pembelian->tanggalPembelian }}</td>
                <td  class="text-white">{{ $pembelian->vendor }}</td>
                <td  class="text-white">{{ $pembelian->harga }}</td>
                <td  class="text-white">{{ $pembelian->alasan }}</td>
                <td  class="text-white">{{ $pembelian->status }}</td>
                <td>
                    <form action="{{ route('pembelian.destroy',$pembelian->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('pembelian.show',$pembelian->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('pembelian.edit',$pembelian->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
  
    {!! $pembelians->links() !!}
      
@endsection