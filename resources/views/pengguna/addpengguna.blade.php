@extends('../layout2/mainnew')
@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Tambah Data User</h1>
      
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="/insertusers" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3 flex justify-between">
          <label for="id_user" class="form-label text-black">ID User</label>
          <input type="number" name="id_user" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="id_user">
        </div>
        <div class="mb-3 flex justify-between">
          <label for="nama_user" class="form-label text-black">Nama User</label>
          <input type="text" name="nama_user" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_user">
        </div>
        <div class="mb-3 flex justify-between">
          <label for="tanggal_lahir" class="form-label text-black">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="tanggal_lahir">
        </div>
        <div class="mb-3 flex justify-between">
          <label for="alamat_user" class="form-label text-black">Alamat User</label>
          <input type="text" name="alamat_user" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="alamat_user">
        </div>
        <div class="mb-3 flex justify-between">
          <label for="email_user" class="form-label text-black">Email User</label>
          <input type="email" name="email_user" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="email_user">
        </div>
        <div class="mb-3 flex justify-between">
          <label for="role_user" class="form-label text-black">Role User</label>
          <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="role_user" aria-label="Default select example">
            <option selected>Pilih Role</option>
            <option value="Admin">Admin</option>
            <option value="Warehouse Keeper">Warehouse Keeper</option>
            <option value="Pegawai">Pegawai</option>
          </select>
        </div>
        <div class="w-full flex justify-end">
          <button type="submit" class="px-3 py-2 bg-blue-600 rounded text-white">Submit</button>
        </div>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection