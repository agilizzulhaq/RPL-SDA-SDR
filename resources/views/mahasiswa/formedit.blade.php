@extends('../layout2/mainnew')

@section('isi')

    <body>
        <div class="pt-5 pb-2 mb-3 border-bottom">
            <h1 class="h2">Form Edit Data Mahasiswa</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/updatedatamahasiswa/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="txtkode" class="col-sm-2 col-form-label">Id Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtkode"
                            readonly class="form-control-plaintext" id="txtkode"
                                value="{{ $data->id }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtnik"
                                class="from-control form-control" id="txtnik"
                                value="{{ $data->NIK }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtnama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtnama"
                                class="from-control form-control @error('txtnama') is-invalid @enderror" id="txtnama"
                                value="{{ $data->Nama }}">
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
                                name="txtjenis" id="txtjenis" value="{{ $data->JenisKelamin }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Pria" {{ $data->JenisKelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita" {{ $data->JenisKelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
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
                                value="{{ $data->Prodi }}">
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
                                name="txtagama" id="txtagama" value="{{ $data->Agama }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Islam" {{ $data->Agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $data->Agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katholik" {{ $data->Agama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                                <option value="Budha" {{ $data->Agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Hindu" {{ $data->Agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
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
                                value="{{ $data->NoTelp }}">
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
                                value="{{ $data->Alamat }}"></textarea>
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
