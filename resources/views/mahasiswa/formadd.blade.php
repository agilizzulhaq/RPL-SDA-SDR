@extends('../layout2/mainnew')

@section('isi')

    <body>
        <div class="pt-5 pb-2 mb-3 border-bottom">
            <h1 class="h2">Form Tambah Data Mahasiswa</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/storedatamahasiswa" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="txtkode" class="col-sm-2 col-form-label">Id Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtkode"
                                class="from-control form-control @error('txtkode') is-invalid @enderror" id="txtkode"
                                value="{{ old('txtkode') }}">
                            @error('txtkode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtnik"
                                class="from-control form-control @error('txtnik') is-invalid @enderror" id="txtnik"
                                value="{{ old('txtnik') }}">
                            @error('txtnik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtnama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtnama"
                                class="from-control form-control @error('txtnama') is-invalid @enderror" id="txtnama"
                                value="{{ old('txtnama') }}">
                            @error('txtnama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtjenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm @error('txtjenis') is-invalid @enderror"
                                name="txtjenis" id="txtjenis" value="{{ old('txtjenis') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Pria" {{ old('txtjenis') == 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita" {{ old('txtjenis') == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                            </select>
                            @error('txtjenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtprodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtprodi"
                                class="from-control form-control @error('txtprodi') is-invalid @enderror" id="txtprodi"
                                value="{{ old('txtprodi') }}">
                            @error('txtprodi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtagama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm @error('txtagama') is-invalid @enderror"
                                name="txtagama" id="txtagama" value="{{ old('txtagama') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Islam" {{ old('txtagama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('txtagama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katholik" {{ old('txtagama') == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                                <option value="Budha" {{ old('txtagama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Hindu" {{ old('txtagama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            </select>
                            @error('txtagama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtnotelp" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtnotelp"
                                class="from-control form-control @error('txtnotelp') is-invalid @enderror" id="txtnotelp"
                                value="{{ old('txtnotelp') }}">
                            @error('txtnotelp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="txtalamat"
                                class="from-control form-control @error('txtalamat') is-invalid @enderror" id="txtalamat"
                                value="{{ old('txtalamat') }}"></textarea>
                            @error('txtalamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary mx-1">Submit</button>
                        <button type="button" class="btn btn-warning mx-1"
                            onclick="window.location='{{ url('/mahasiswa') }}'">
                            Kembali
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
