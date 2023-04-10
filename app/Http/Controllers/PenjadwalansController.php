<?php

namespace App\Http\Controllers;

use App\Models\Ruangans;
use App\Http\Requests\StoreRuangansRequest;
use App\Http\Requests\UpdateRuangansRequest;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use Illuminate\Http\Request;

class PenjadwalansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penjadwalan.data')->with([
            'penjadwalans' => Ruangans::all()
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
        $ruangans->jenisruangan = $request->txtjenis;
        $ruangans->lokasi = $request->txtlokasi;
        $ruangans->kapasitas = $request->txtkapasitas;
        $ruangans->status = $request->txtstatus;
        $ruangans->save();

        return redirect('penjadwalans')->with('msg','menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangans $ruangans,$koderuangan)
    {
        // $ruangans = Ruangans::all();
        // $data = $ruangans->find($koderuangan);
        // return view('penjadwalan.formedit')->with([
        //     'txtkode' => $koderuangan,
        //     'txtnama' => $data->namaruangan,
        //     'txtjenis' => $data->jenisruangan,
        //     'txtlokasi' => $data->lokasi,
        //     'txtkapasitas' => $data->kapasitas,
        //     'txtstatus' => $data->status,
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
    public function update(Request $request, Ruangans $ruangans,$koderuangan)
    {
        // $data =$ruangans->find($koderuangan);
        // $data->koderuangan = $request->txtkode;
        // $data->namaruangan = $request->txtnama;
        // $data->jenisruangan = $request->txtjenis;
        // $data->lokasi = $request->txtlokasi;
        // $data->kapasitas = $request->txtkapasitas;
        // $data->status = $request->txtstatus;
        // $data->save();

        // return redirect('penjadwalans')->with('msg','mengubah data');
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
