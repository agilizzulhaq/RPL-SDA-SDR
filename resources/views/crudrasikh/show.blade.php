<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    <div class="flex justify-center mt-10 w-full h-screen">
        <div>
            <h1 class="text-2xl font-mono text-black font-bold mb-5">Informasi Mahasiswa</h1>
            <table>
                <thead>
                    <tr>
                        <th class="border border-black px-3 py-2">Nama</th>
                        <th class="border border-black px-3 py-2">Jenis Kelamin</th>
                        <th class="border border-black px-3 py-2">Prodi</th>
                        <th class="border border-black px-3 py-2">Agama</th>
                        <th class="border border-black px-3 py-2">NIK</th>
                        <th class="border border-black px-3 py-2">Telepon</th>
                        <th class="border border-black px-3 py-2">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black px-3 py-2">{{ $rasikh->nama }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->jenis_kelamin }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->prodi }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->agama }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->NIK }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->telepon }}</td>
                        <td class="border border-black px-3 py-2">{{ $rasikh->alamat }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('crudrasikhs.index') }}" class="mt-5 block w-[100px] text-center bg-blue-500 hover:bg-blue-400 px-4 py-2 rounded font-bold text-white font-mono">kembali</a>
        </div>
    </div>
</body>
</html>