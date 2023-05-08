<?php

namespace App\Http\Controllers;

use App\Models\PerawatanRuangan;
use App\Http\Requests\StorePerawatanRuanganRequest;
use App\Http\Requests\UpdatePerawatanRuanganRequest;
use illuminate\Http\Request;

class PerawatanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PerawatanRuangan::all();
        return view('perawatan.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perawatan.formadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerawatanRuanganRequest $request)
    {
        $validate = $request->validated();

        $PerawatanRuangan = new PerawatanRuangan;
        $PerawatanRuangan->kodeRuangan = $request->txtkode;
        $PerawatanRuangan->namaRuangan = $request->txtnama;
        $PerawatanRuangan->lokasiRuangan = $request->txtlokasi;
        $PerawatanRuangan->kondisi = $request->txtkondisi;
        $PerawatanRuangan->history = $request->txthistory;
        $PerawatanRuangan->statusperawatan = $request->txtstatusp;
        $PerawatanRuangan->save();
        //dd($request->all());
        // PerawatanRuangan::create($request->all());
        return redirect()->route('dataperawatan')->with('msg','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = PerawatanRuangan::find($id);
        return view('perawatan.formedit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerawatanRuangan $perawatanRuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerawatanRuanganRequest $request, $id)
    {
        $PerawatanRuangan = PerawatanRuangan::find($id);
        $PerawatanRuangan->kodeRuangan = $request->txtkode;
        $PerawatanRuangan->namaRuangan = $request->txtnama;
        $PerawatanRuangan->lokasiRuangan = $request->txtlokasi;
        $PerawatanRuangan->kondisi = $request->txtkondisi;
        $PerawatanRuangan->history = $request->txthistory;
        $PerawatanRuangan->statusperawatan = $request->txtstatusp;
        $PerawatanRuangan->save();

        // $data->update($request->all());

        return redirect()->route('dataperawatan')->with('msg','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = PerawatanRuangan::find($id);
        $data->delete();

        return redirect()->route('dataperawatan')->with('msg','Data Berhasil Di Hapus');
    }
}
