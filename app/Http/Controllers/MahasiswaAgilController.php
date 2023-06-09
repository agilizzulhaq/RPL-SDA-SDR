<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaAgil;
use Illuminate\Http\Request;

class MahasiswaAgilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswaagil = MahasiswaAgil::all();
        return view('mahasiswa_agil.index', compact('mahaasiswaagil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa_agil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MahasiswaAgil::create($request->except(['_token', 'submit']));
        return redirect('/mahasiswa-agil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($IDMahasiswa)
    {
        $mahasiswaagil = MahasiswaAgil::find($IDMahasiswa);
        return view('mahasiswa_agil.edit', compact('mahaasiswaagil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($IDMahasiswa, Request $request)
    {
        $mahasiswaagil = MahasiswaAgil::find($IDMahasiswa);
        $mahasiswaagil->update($request->except(['_token', 'submit']));
        return redirect('/mahasiswa-agil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($IDMahasiswa)
    {
        $mahasiswaagil = MahasiswaAgil::find($IDMahasiswa);
        $mahasiswaagil->delete();
        return redirect('/mahasiswa-agil');
    }
}