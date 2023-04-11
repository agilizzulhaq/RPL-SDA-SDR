@extends('wares.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ware Tabel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('wares.create') }}"> Create New Ware</a>
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
            <th>Id</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($wares as $ware)
        <tr>
            <td>{{ $ware->id }}</td>
            <td>{{ $ware->nama }}</td>
            <td>{{ $ware->tanggal_lahir }}</td>
            <td>{{ $ware->alamat }}</td>
            <td>{{ $ware->email }}</td>
            <td>
                <form action="{{ route('wares.destroy',$ware->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('wares.show',$ware->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('wares.edit',$ware->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $wares->links() !!}
      
@endsection