@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">
    <h1 class="text-3xl text-black font-bold mb-5">Edit Data Mahasiswa</h1>
    <div>
        <a href="/mahasiswa-agil" class="btn btn-primary mb-2">Kembali</a>
    </div>
    <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
        <form action="/mahasiswa-agil/{{ $mahasiswaagil -> IDMahasiswa }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 flex justify-between">
            <label for="IDMahasiswa" class="form-label">NIM</label>
            <input type="number" name="IDMahasiswa" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan NIM" value="{{ $mahasiswaagil -> IDMahasiswa }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="Nama" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan Nama" value="{{ $mahasiswaagil -> Nama }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Prodi" class="form-label">Prodi</label>
            <input type="text" name="Prodi" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan Prodi" value="{{ $mahasiswaagil -> Prodi }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="Tanggal_Lahir" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan Tanggal Lahir" value="{{ $mahasiswaagil -> Tanggal_Lahir }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Agama" class="form-label">Agama</label>
            <select class="form-control" name="Agama" aria-label="Default select example">
                <option selected>{{ $mahasiswaagil -> Agama }}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3 flex justify-between">
            <label for="NIK" class="form-label">NIK</label>
            <input type="number" name="NIK" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan NIK" value="{{ $mahasiswaagil -> NIK }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Telepon" class="form-label">Nomor Telepon</label>
            <input type="number" name="Telepon" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" placeholder="Masukkan Nomor Telepon" value="{{ $mahasiswaagil -> Telepon }}">
        </div>
        <div class="mb-3 flex justify-between">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea name="Alamat" class="rounded text-sm py-1 px-2 text-black w-[700px] border-1 border-black" {{ $mahasiswaagil -> Alamat }} placeholder="Masukkan Alamat"></textarea>
        </div>
        <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Simpan</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection