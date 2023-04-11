@extends('admins.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Tabel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admins.create') }}"> Create New Admin</a>
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
        @foreach ($admins as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->nama }}</td>
            <td>{{ $admin->tanggal_lahir }}</td>
            <td>{{ $admin->alamat }}</td>
            <td>{{ $admin->email }}</td>
            <td>
                <form action="{{ route('admins.destroy',$admin->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admins.show',$admin->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('admins.edit',$admin->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $admins->links() !!}
      
@endsection