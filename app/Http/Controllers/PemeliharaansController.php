<?php

namespace App\Http\Controllers;

use App\Models\Ruangans;
use App\Http\Requests\StoreRuangansRequest;
use App\Http\Requests\UpdateRuangansRequest;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use Illuminate\Http\Request;

class PemeliharaansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemeliharaan.data')->with([
            'pemeliharaans' => Ruangans::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validated();
        $ruangans = new Ruangans;
        $ruangans->koderuangan = $request->txtkode;
        $ruangans->namaruangan = $request->txtnama;
        $ruangans->lokasi = $request->txtlokasi;
        $ruangans->kondisi = $request->txtkondisi;
        $ruangans->history = $request->txthistory;
        $ruangans->statusperawatan = $request->txtstatusp;
        $ruangans->save();

        return redirect('pemeliharaans')->with('msg','menambahkan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangans $ruangans,$koderuangan)
    {
        // $ruangans = Ruangans::all();
        // $data = $ruangans->find($koderuangan);
        // return view('pemeliharaan.formedit')->with([
        //     'txtkode' => $koderuangan,
        //     'txtnama' => $data->namaruangan,
        //     'txtlokasi' => $data->lokasi,
        //     'txtkondisi' => $data->kondisi,
        //     'txthistory' => $data->history,
        //     'txtstatusp' => $data->statusperawatan,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruangans $ruangans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruangans $ruangans)
    {
        // $data =$ruangans->find($koderuangan);
        // $data->koderuangan = $request->txtkode;
        // $data->namaruangan = $request->txtnama;
        // $data->lokasi = $request->txtlokasi;
        // $data->kondisi = $request->txtkondisi;
        // $data->history = $request->txthistory;
        // $data->statusperawatan = $request->txtstatusp;
        // $data->save();

        // return redirect('pemeliharaans')->with('msg','menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangans $ruangans)
    {
        // $data = $ruangans->find($koderuangan);
        // $data->delete();
        // return redirect('penjadwalans')->with('msg','menghapus data');
    }
}
