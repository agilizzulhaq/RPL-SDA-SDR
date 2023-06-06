<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaRasikh;

class CrudRasikhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crudrasikh.index', [
            'rasikh' => MahasiswaRasikh::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudrasikh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "nama" => "required",
            "jenis_kelamin" => "required",
            "prodi" => "required",
            "agama" => "required",
            "NIK" => "required",
            "telepon" => "required",
            "alamat" => "required",
        ]);

        MahasiswaRasikh::create($validated);

        return redirect()->route('crudrasikhs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MahasiswaRasikh $crudrasikh)
    {
        return view('crudrasikh.show', [
            'rasikh' => $crudrasikh,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MahasiswaRasikh $crudrasikh)
    {
        return view('crudrasikh.edit', [
            'rasikh' => $crudrasikh,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MahasiswaRasikh $crudrasikh, Request $request)
    {
        MahasiswaRasikh::where('id', $crudrasikh->id)->update($request->validate([
            "nama" => "required",
            "jenis_kelamin" => "required",
            "prodi" => "required",
            "agama" => "required",
            "NIK" => "required",
            "telepon" => "required",
            "alamat" => "required",
        ]));

        return redirect()->route('crudrasikhs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MahasiswaRasikh $crudrasikh)
    {
        MahasiswaRasikh::destroy($crudrasikh->id);

        return redirect()->route('crudrasikhs.index');
    }
}
