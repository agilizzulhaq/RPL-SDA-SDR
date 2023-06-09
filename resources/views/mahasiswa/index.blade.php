@extends('../layout2/mainnew')

@section('isi')

    <body>
        <div class="pt-5 pb-2 mb-3 border-bottom">
            <div class="d-flex justify-content-between">
                <h1 class="h2">Data Mahasiswa</h1>
                <button type="button" class="btn btn-sm btn-primary"
                    onclick="window.location='{{ url('tambahdatamahasiswa') }}'">
                    <i class="fa-solid fa-plus"></i> Add New Data
                </button>
            </div>
        </div>

        <table class="table table-striped">
            <thead class="text-center">
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">ID Mahasiswa</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Agama</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody class="text-center">
                {{-- @php
                    $no = 1;
                @endphp --}}
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        {{-- <th scope="row">{{ $index + $data->firstItem() }}</th> --}}
                        <td scope="row">{{ $row->id }}</td>
                        <td scope="row">{{ $row->NIK }}</td>
                        <td scope="row">{{ $row->Nama }}</td>
                        <td scope="row">{{ $row->JenisKelamin }}</td>
                        <td scope="row">{{ $row->Prodi }}</td>
                        <td scope="row">{{ $row->Agama }}</td>
                        <td scope="row">0{{ $row->NoTelp }}</td>
                        <td scope="row">{{ $row->Alamat }}</td>
                        <td>
                            <a href="/showdatamahasiswa/{{ $row->id }}" class="btn btn-sm btn-info" title="Edit data">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/deletedatamahasiswa/{{ $row->id }}"
                                class="btn btn-sm btn-danger delete" title="Delete data">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}
        </div>
        </div>
    </body>
@endsection
