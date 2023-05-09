@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16">
        <div class="container">
            <h3> Form edit Data Penjadwalan</h3>
            <div class="card">
                <div class="card-header">
                  <button type ="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('penjadwalanruangan') }}'">
                    Kembali
                  </button>
                </div>
                <div class="card-body">
                    <form action="/updatedatapenjadwalanruangan/{{ $data->id }}" method="POST">
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
                            <label for="txtjenis" class="col-sm-2 col-form-label">Jenis Ruangan</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-sm @error('txtjenis') is-invalid @enderror"
                                name="txtjenis" id="txtjenis" value="{{ $data->jenisRuangan }}">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="UGD" {{ ($data->jenisRuangan=='UGD' ? 'selected' : '') }}>UGD</option>
                                    <option value="ICU" {{ ($data->jenisRuangan=='ICU' ? 'selected' : '') }}>ICU</option>
                                    <option value="HCU" {{ ($data->jenisRuangan=='HCU' ? 'selected' : '') }}>HCU</option>
                                    <option value="ICCU" {{ ($data->jenisRuangan=='ICCU' ? 'selected' : '') }}>ICCU</option>
                                    <option value="NICU" {{ ($data->jenisRuangan=='NICU' ? 'selected' : '') }}>NICU</option>
                                    <option value="PICU" {{ ($data->jenisRuangan=='PICU' ? 'selected' : '') }}>PICU</option>
                                    <option value="Kamar Operasi" {{ ($data->jenisRuangan=='Kamar Operasi' ? 'selected' : '') }}>Kamar Operasi</option>
                                    <option value="Kamar Perawatan" {{ ($data->jenisRuangan=='Kamar Perawatan' ? 'selected' : '') }}>Kamar Perawatan</option>
                                    <option value="Klinik Rawat Jalan" {{ ($data->jenisRuangan=='Klinik Rawat Jalan' ? 'selected' : '') }}>Klinik Rawat Jalan</option>
                                </select>
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
                            <label for="txtnamaorang" class="col-sm-2 col-form-label">Nama Peminjam</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtnamaorang" class="from-control form-control @error('txtnamaorang') is-invalid @enderror"
                                    id="txtnamaorang" value="{{ $data->namaPeminjam }}">
                                    @error('txtnamaorang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtkapasitas" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                            <div class="col-sm-10">
                                <input type="number" class="from-control form-control @error('txtkapasitas') is-invalid @enderror"
                                id="txtkapasitas" name="txtkapasitas" value="{{ $data->kapasitas }}">
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
                                <select class="form-select form-select-sm @error('txtstatus') is-invalid @enderror"
                                name="txtstatus" id="txtstatus" value="{{ $data->statusRuangan }}">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="Tersedia" {{ ($data->statusRuangan=='Tersedia' ? 'selected' : '') }}>Tersedia</option>
                                    <option value="Tidak Tersedia" {{ ($data->statusRuangan=='Tidak Tersedia' ? 'selected' : '') }}>Tidak Tersedia</option>
                                </select>
                                @error('txtstatus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txttanggal" class="col-sm-2 col-form-label">Tanggal Dipinjam</label>
                            <div class="col-sm-10">
                                <input type="date" name="txttanggal" class="from-control form-control @error('txttanggal') is-invalid @enderror"
                                id="txttanggal" value="{{ $data->tanggalDipinjam }}">
                                @error('txttanggal')
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
