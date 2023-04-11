@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpembelian')
@endsection

@section('isi')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Pembelian Alat</h2>
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
   
    <table class="table table-bordered">
        <tr>
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
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pembelian->idPembelianAlat }}</td>
            <td>{{ $pembelian->namaAlat }}</td>
            <td>{{ $pembelian->tanggalPembelian }}</td>
            <td>{{ $pembelian->vendor }}</td>
            <td>{{ $pembelian->harga }}</td>
            <td>{{ $pembelian->alasan }}</td>
            <td>{{ $pembelian->status }}</td>
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
  
    {!! $pembelians->links() !!}
      
@endsection