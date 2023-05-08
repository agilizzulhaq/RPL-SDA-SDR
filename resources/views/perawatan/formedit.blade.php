@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16">
        <div class="container">
            <h3> Form Edit Data Perawatan</h3>
            <div class="card">
                <div class="card-header">
                  <button type ="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('perawatanruangan') }}'">
                    Kembali
                  </button>
                </div>
                <div class="card-body">
                    <form action="/updatedataperawatanruangan/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="txtkode" class="col-sm-2 col-form-label">kode Ruangan</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtkode" class="from-control form-control-plaintext "
                                    id="txtkode" value="{{ $data->kodeRuangan }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtnama" class="col-sm-2 col-form-label">Nama Ruangan</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtnama" class="from-control form-control @error('txtnama') is-invalid @enderror"
                                    id="txtnama" value="{{ $data->namaRuangan }}">
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
                                <input type="text" name="txtlokasi" class="from-control form-control @error('txtlokasi') is-invalid @enderror"
                                id="txtlokasi" value="{{ $data->lokasiRuangan }}">
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
                                name="txtkondisi" id="txtkondisi" value="{{ $data->kondisi }}">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="B" {{ ($data->kondisi=='B' ? 'selected' : '') }}>Baik</option>
                                    <option value="S" {{ ($data->kondisi=='S' ? 'selected' : '') }}>Sedang</option>
                                    <option value="R" {{ ($data->kondisi=='R' ? 'selected' : '') }}>Rusak</option>
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
                                <input type="date" name="txthistory" class="from-control form-control @error('txthistory') is-invalid @enderror"
                                id="txthistory" value="{{ $data->history }}">
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
                                <select class="form-select form-select-sm @error('txtstatusp') is-invalid @enderror"
                                name="txtstatusp" id="txtstatusp" value="{{ $data->statusperawatan }}">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="Belum dirawat" {{ ($data->statusperawatan=='Belum dirawat' ? 'selected' : '') }}>Belum dirawat</option>
                                    <option value="Sedang dirawat" {{ ($data->statusperawatan=='Sedang dirawat' ? 'selected' : '') }}>Sedang dirawat</option>
                                    <option value="Selesai dirawat" {{ ($data->statusperawatan=='Selesai dirawat' ? 'selected' : '') }}>Selesai dirawat</option>
                                </select>
                                @error('txtstatusp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
