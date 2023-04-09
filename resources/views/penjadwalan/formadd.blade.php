@extends('layout.main')

@section('content')
<h3> From tambah Data Jadwal</h3>
    <div class="card">
        <div class="card-header">
        <button type ="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('penjadwalans') }}'">
        Kembali
        </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('ruangans') }}">
                @csrf

                <div class="row mb-3">
                    <label for="txtkode" class="col-sm-2 col-form-label">kode Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtkode') is-invalid @enderror"
                            id="txtkode" name="txtkode" value="{{ old('txtkode') }}">
                        @error('txtkode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtnama') is-invalid @enderror"
                            id="txtnama" name="txtnama" value="{{ old('txtnama') }}">
                        @error('txtnama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtjenis" class="col-sm-2 col-form-label">Jenis Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtjenis') is-invalid @enderror"
                        id="txtjenis" name="txtjenis" value="{{ old('txtjenis') }}">
                        @error('txtjenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtlokasi" class="col-sm-2 col-form-label">Lokasi Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtlokasi') is-invalid @enderror"
                        id="txtlokasi" name="txtlokasi" value="{{ old('txtlokasi') }}">
                        @error('txtlokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtkapasitas" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtkapasitas') is-invalid @enderror"
                        id="txtkapasitas" name="txtkapasitas" value="{{ old('txtkapasitas') }}">
                        @error('txtkapasitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtstatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtstatus') is-invalid @enderror"
                        id="txtstatus" name="txtstatus" value="{{ old('txtstatus') }}">
                        @error('txtstatus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
