@extends('layout.main')

@section('content')
<h3> From tambah Data Pemeliharaan</h3>
    <div class="card">
        <div class="card-header">
        <button type ="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pemeliharaans') }}'">
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
                    <label for="txtkondisi" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm @error('txtkondisi') is-invalid @enderror"
                        name="txtkondisi" id="txtkondisi" value="{{ old('txtkondisi') }}">
                            <option value="" selected>-Pilih-</option>
                            <option value="B" {{ (old('txtkondisi')=='B' ? 'selected' : '') }}>Baik</option>
                            <option value="S" {{ (old('txtkondisi')=='S' ? 'selected' : '') }}>Sedang</option>
                            <option value="R" {{ (old('txtkondisi')=='R' ? 'selected' : '') }}>Rusak</option>
                        </select>
                        @error('txtkondisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txthistory" class="col-sm-2 col-form-label">Terakhir Dirawat</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txthistory') is-invalid @enderror"
                        id="txthistory" name="txthistory" value="{{ old('txthistory') }}">
                        @error('txthistory')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtstatusp" class="col-sm-2 col-form-label">Status Perawatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control form-control @error('txtstatusp') is-invalid @enderror"
                        id="txtstatusp" name="txtstatusp" value="{{ old('txtstatusp') }}">
                        @error('txtstatusp')
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
