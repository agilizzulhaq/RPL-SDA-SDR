<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Crud Rasikh</title>
</head>
<body>
    <div class="flex w-full h-screen justify-center mt-10">
        <div>
            <h1 class="text-2xl font-mono text-black font-bold">Tabel Mahasiswa</h1>
            <a href="{{ route('crudrasikhs.create') }}" class="block w-[150px] bg-blue-500 px-4 py-2 rounded text-center text-white font-mono font-bold my-5">Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <th class="border border-black px-3 py-2">No</th>
                        <th class="border border-black px-3 py-2">Nama</th>
                        <th class="border border-black px-3 py-2">Jenis Kelamin</th>
                        <th class="border border-black px-3 py-2">Prodi</th>
                        <th class="border border-black px-3 py-2">Agama</th>
                        <th class="border border-black px-3 py-2">NIK</th>
                        <th class="border border-black px-3 py-2">Telepon</th>
                        <th class="border border-black px-3 py-2">Alamat</th>
                        <th class="border border-black px-3 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rasikh as $item)
                    <tr>
                        <td class="border border-black px-3 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->nama }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->jenis_kelamin }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->prodi }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->agama }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->NIK }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->telepon }}</td>
                        <td class="border border-black px-3 py-2">{{ $item->alamat }}</td>
                        <td class="border border-black px-3 py-2">
                            <form class="inline" onclick="return confirm('Yakin mau hapuss??!')" action="{{ route('crudrasikhs.destroy', $item) }}" method="post">
                                @method('delete')
                                @csrf
                                <button><span class="material-icons bg-slate-200 rounded hover:bg-slate-300 p-1">delete</span></button>                               
                            </form>
                            <a href=" {{ route('crudrasikhs.edit', $item) }}"><span class="material-icons bg-slate-200 rounded hover:bg-slate-300 p-1 ml-2">edit</span></a>
                            <a href=" {{ route('crudrasikhs.show', $item) }}"><span class="material-icons bg-slate-200 rounded hover:bg-slate-300 p-1 ml-2">visibility</span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>