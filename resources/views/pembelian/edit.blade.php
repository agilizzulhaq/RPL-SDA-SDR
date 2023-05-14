@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

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
      
        <form action="{{ route('pembelian.update',$pembelian->id_pembelian) }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="id_pembelian">ID Pembelian:</label>
                        <input type="number" class="form-control" name="id_pembelian" value="{{ $pembelian->id_pembelian }}" placeholder="ID Pembelian">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="nama_alat">Nama Alat:</label>
                        <select class="form-select" name="nama_alat" class="form-control" id="nama_alat" value="{{ $pembelian->nama_alat }}" aria-label="Default select example"> 
                            @foreach ($nama_alat as $item)
                                <option value="{{ $item->kode_nama_alat }}" @if ($item->kode_nama_alat == $pembelian->nama_alat) selected @endif>
                                    {{ $item->nama_alat }}
                                </option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                        <input type="date" class="form-control" name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" placeholder="Tanggal Pembelian">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="vendor">Vendor:</label>
                        <select class="form-select" name="vendor" class="form-control" id="vendor" value="{{ $pembelian->vendor }}" aria-label="Default select example"> 
                            @foreach ($vendor as $item)
                                <option value="{{ $item->id_vendor }}" @if ($item->id_vendor == $pembelian->vendor) selected @endif>
                                    {{ $item->nama_vendor }}
                                </option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="harga_satuan">Harga_satuan:</label>
                        <input type="number" class="form-control" name="harga_satuan" value="{{ $pembelian->harga_satuan }}" placeholder="Harga satuan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="jumlah_pembelian">Jumlah_pembelian:</label>
                        <input type="number" class="form-control" name="jumlah_pembelian" value="{{ $pembelian->jumlah_pembelian }}" placeholder="Jumlah Pembelian">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <input type="text" class="form-control" name="keterangan" value="{{ $pembelian->keterangan }}" placeholder="Keterangan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status" value="{{ $pembelian->status }}">
                        <option value="Belum konfirmasi">Belum konfirmasi</option>
                        <option value="Konfirmasi untuk pembelian">Konfirmasi untuk pembelian</option>
                        <option value="Sedang dalam pemesanan">Sedang dalam pemesanan</option>
                        <option value="Barang datang">Barang datang</option>
                        <option value="Barang masuk database">Barang masuk database</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
@endsection