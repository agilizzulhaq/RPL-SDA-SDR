<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL MAHASISWA AGIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>
    <h1 class="text-center mt-4 mb-4">Data Mahasiswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-20">
                {{-- <div class="card"> --}}
                    <div class="card-header">
                        <a href="/mahasiswa-agil/create" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
                    </div>
                    {{-- <div class="card-body"> --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-primary text-center">
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $mhs -> IDMahasiswa }}</td>
                                <td>{{ $mhs -> Nama }}</td>
                                <td>{{ $mhs -> Jenis_Kelamin }}</td>
                                <td>{{ $mhs -> Prodi }}</td>
                                <td>{{ $mhs -> Jurusan }}</td>
                                <td>{{ $mhs -> Email }}</td>
                                <td>{{ $mhs -> Tanggal_Lahir }}</td>
                                <td>{{ $mhs -> Agama }}</td>
                                <td>{{ $mhs -> NIK }}</td>
                                <td>{{ $mhs -> Telepon }}</td>
                                <td>{{ $mhs -> Alamat }}</td>
                                <td>
                                    <a href="/mahasiswa-agil/edit/{{ $mhs -> IDMahasiswa }}" class="btn btn-primary">Edit</a>
                                    <form action="/mahasiswa-agil/delete/{{ $mhs -> IDMahasiswa }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>