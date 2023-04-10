@extends('wares.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Wares</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('wares.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>WareKeeper Id:</strong>
            {{ $ware->wareid }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $ware->namaware }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jabatan:</strong>
            {{ $ware->jabatanware }}
        </div>
    </div>
</div>
@endsection