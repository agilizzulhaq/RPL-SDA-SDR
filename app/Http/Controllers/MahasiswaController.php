<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::paginate(5);
        return view('mahasiswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.formadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $validate = $request->validated();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->id = $request->txtkode;
        $mahasiswa->NIK = $request->txtnik;
        $mahasiswa->Nama = $request->txtnama;
        $mahasiswa->JenisKelamin = $request->txtjenis;
        $mahasiswa->Prodi = $request->txtprodi;
        $mahasiswa->Agama = $request->txtagama;
        $mahasiswa->NoTelp = $request->txtnotelp;
        $mahasiswa->Alamat = $request->txtalamat;
        $mahasiswa->save();

        return redirect()->route('datamahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);
        return view('mahasiswa.formedit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, $id)
    {
        $validate = $request->validated();

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->id = $request->txtkode;
        $mahasiswa->NIK = $request->txtnik;
        $mahasiswa->Nama = $request->txtnama;
        $mahasiswa->JenisKelamin = $request->txtjenis;
        $mahasiswa->Prodi = $request->txtprodi;
        $mahasiswa->Agama = $request->txtagama;
        $mahasiswa->NoTelp = $request->txtnotelp;
        $mahasiswa->Alamat = $request->txtalamat;
        $mahasiswa->save();

        return redirect()->route('datamahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('datamahasiswa');
    }
}
