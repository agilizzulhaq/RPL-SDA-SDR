@extends('layout.main')

@section('content')
<h4>Data Mahasiswa</h4>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('mahasiswa_alyzar/add') }}'">
        Add New Data
      </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> {{session('msg')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      <div class="alert alert-info">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Mahasiswa</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Addreess</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Prodi</th>
                    <th>Agama</th>
                    <th>NIK</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa_alyzar as $row)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$row->idstudents}}</td>
                    <td>{{$row->fullname}}</td>
                    <td>{{($row->gender=='M') ? 'Male':'Female' }}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->prodi}}</td>
                    <td>{{$row->agama}}</td>
                    <td>{{$row->nik}}</td>
                    <td>
                        <button onclick="window.location='{{ url('mahasiswa_alyzar/'.$row->idstudents)}}' " type="button" class="btn btn-sm btn-info">
                            Update
                        </button>
                        <form method="POST" onsubmit="return deleteData('{{$row->fullname}}')" style="display: inline" action="{{ url('mahasiswa_alyzar/'.$row->idstudents) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
<script>
    function deleteData(name){
        pesan = confirm('Are You Sure to Delete?' );
        if (pesan) return true;
        else return false;
    }
</script>
@endsection