<?php

namespace App\Http\Controllers;

use App\Models\PenjadwalanRuangan;
use App\Http\Requests\StorePenjadwalanRuanganRequest;
use App\Http\Requests\UpdatePenjadwalanRuanganRequest;
use illuminate\Http\Request;

class PenjadwalanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PenjadwalanRuangan::all();
        return view('penjadwalan.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjadwalan.formadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjadwalanRuanganRequest $request)
    {
        $validate = $request->validated();

        $PenjadwalanRuangan = new PenjadwalanRuangan;
        $PenjadwalanRuangan->kodeRuangan = $request->txtkode;
        $PenjadwalanRuangan->namaRuangan = $request->txtnama;
        $PenjadwalanRuangan->jenisRuangan = $request->txtjenis;
        $PenjadwalanRuangan->lokasiRuangan = $request->txtlokasi;
        $PenjadwalanRuangan->kapasitas = $request->txtkapasitas;
        $PenjadwalanRuangan->statusRuangan = $request->txtstatus;
        $PenjadwalanRuangan->save();

        return redirect()->route('datapenjadwalan')->with('msg','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = PenjadwalanRuangan::find($id);
        return view('penjadwalan.formedit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenjadwalanRuangan $penjadwalanRuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjadwalanRuanganRequest $request, $id)
    {
        $PenjadwalanRuangan = PenjadwalanRuangan::find($id);
        $PenjadwalanRuangan->kodeRuangan = $request->txtkode;
        $PenjadwalanRuangan->namaRuangan = $request->txtnama;
        $PenjadwalanRuangan->jenisRuangan = $request->txtjenis;
        $PenjadwalanRuangan->lokasiRuangan = $request->txtlokasi;
        $PenjadwalanRuangan->kapasitas = $request->txtkapasitas;
        $PenjadwalanRuangan->statusRuangan = $request->txtstatus;
        $PenjadwalanRuangan->save();

        return redirect()->route('datapenjadwalan')->with('msg','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = PenjadwalanRuangan::find($id);
        $data->delete();

        return redirect()->route('datapenjadwalan')->with('msg','Data Berhasil Di Hapus');
    }
}