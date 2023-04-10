@extends('wares.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit WareKeeper</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('wares.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('wares.update',$ware->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>WareKeeper Id:</strong>
                <input type="text" name="wareid" value="{{ $ware->wareid }}" class="form-control" placeholder="warekeeper id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="namaware" value="{{ $ware->namaware }}" class="form-control" placeholder="namaware">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jabatan:</strong>
                <input type="text" name="jabatanware" value="{{ $ware->jabatanware }}" class="form-control" placeholder="jabatan ware">
            </div>
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection