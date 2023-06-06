@extends('layout.main')

@section('content')
<h4>ADD Data Mahasiswa</h4>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('mahasiswa_alyzar') }}'">
        Kembali 
      </button>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
             </ul>
            </div>
        @endif
        <form method="POST" action="{{url('mahasiswa_alyzar')}}">
            @csrf
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">Id Mahasiswa</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" id="txtid" name="txtid">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-4">
                  <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                    <option value="" selected>Pilih</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-4">
                  <textarea class="form-control @error('txtaddress') is-invalid @enderror" cols='30' rows='10' id="txtaddress" name="txtaddress"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" id="txtemail" name="txtemail">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" id="txtphone" name="txtphone">
                </div>
            </div>
            <div class="row mb-3">
              <label for="txtprodi" class="col-sm-2 col-form-label">Prodi</label>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('txtprodi') is-invalid @enderror" id="txtprodi" name="txtprodi">
              </div>
            </div>
            <div class="row mb-3">
              <label for="txtagama" class="col-sm-2 col-form-label">Agama</label>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('txtagama') is-invalid @enderror" id="txtagama" name="txtagama">
              </div>
            </div>
            <div class="row mb-3">
              <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('txtnik') is-invalid @enderror" id="txtnik" name="txtnik">
              </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-sm btn-success">
                    Save
                  </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
