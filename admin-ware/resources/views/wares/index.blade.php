@extends('wares.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>WareKeepers</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('wares.create') }}"> Create New WareKeepers</a>
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
        <th>WareKeeper Id</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($wares as $ware)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $ware->wareid }}</td>
        <td>{{ $ware->namaware }}</td>
        <td>{{ $ware->jabatanware }}</td>
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