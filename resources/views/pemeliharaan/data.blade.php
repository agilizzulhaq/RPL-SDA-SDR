@extends('layout.main')

@section('content')
<h3> Data Pemeliharaan</h3>
<div class="card">
    <div class="card-header">
      <button type ="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('pemeliharaans/add') }}'">
        add new data
      </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ section('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Lokasi Ruangan</th>
                    <th>Kondisi Ruangan</th>
                    <th>Terakhir Dirawat</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemeliharaans as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->koderuangan }}</td>
                    <td>{{ $row->namaruangan }}</td>
                    <td>{{ $row->lokasi }}</td>
                    <td>{{ (($row->kondisi=='B') ? 'Baik' : (($row->kondisi=='S') ? 'Sedang' : 'Rusak')) }}</td>
                    <td>{{ $row->history }}</td>
                    <td>{{ $row->statusperawatan }}</td>
                    <td>
                        <button
                        {{-- onclick="window.location='{{ url('pemeliharaans/'.$row->koderuangan) }}'"  --}}
                            type="button" class="btn btn-sm btn-info" title="Edit data">
                            <i class="fas fa-edit"></i>
                            {{-- <form onsubmit="return deleteData()" style="display: inline"  method="POST" action="{{ url('pemeliharaans/'.$row->koderuangan) }}">
                            @csrf
                            @method('DELETE') --}}
                            <button type="submit" title="Hapus Data" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
  <script>
    function deleteData(){
        pesan=('anda yakin akan menghapus data?');
        if(pesan) return true;
        else return false;
    }
  </script>
@endsection
