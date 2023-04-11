@extends('../layout2/main')

@section('nav')
    @include('../layout2/navpembelian')
@endsection

@section('isi')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Alat Kesehatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pembelian.index') }}"> Back</a>
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
  
    <form action="{{ route('pembelian.update',$pembelian->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="idPembelianAlat">ID Pembelian Alat:</label>
                    <input type="text" class="form-control" name="idPembelianAlat" value="{{ $pembelian->idPembelianAlat }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="namaAlat">Nama Alat:</label>
                    <input type="text" class="form-control" name="namaAlat" value="{{ $pembelian->namaAlat }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="tanggalPembelian">Tanggal Pembelian:</label>
                    <input type="text" class="form-control" name="tanggalPembelian" value="{{ $pembelian->tanggalPembelian }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="vendor">Vendor:</label>
                    <input type="text" class="form-control" name="vendor" value="{{ $pembelian->vendor }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" class="form-control" name="harga" value="{{ $pembelian->harga }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="alasan">Alasan:</label>
                    <input type="text" class="form-control" name="alasan" value="{{ $pembelian->alasan }}" placeholder="Kode Alat">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="kodeAlat">Kode Alat:</label>
                    <input type="text" class="form-control" name="kodeAlat" value="{{ $pembelian->kodeAlat }}" placeholder="Kode Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="namaAlat">Nama Alat:</label>
                    <input type="text" class="form-control" id="namaAlat" name="namaAlat" value="{{ $pembelian->namaAlat }}" placeholder="Nama Alat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="namaAlat">Lokasi:</label>
                    <textarea class="form-control" name="lokasi" value="{{ $pembelian->lokasi }}" placeholder="Input Lokasi"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="kondisi">Kondisi:</label>
                    <select class="form-control" name="kondisi" value="{{ $pembelian->kondisi }}" >
                        <option value="Layak">Layak</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="status">Status:</label>
                <select class="form-control" name="status" value="{{ $pembelian->status }}">
                    <option value="Tersedia">Tersedia</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection