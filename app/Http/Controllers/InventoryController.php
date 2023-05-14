<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\NamaAlat;
use App\Models\Room;
use App\Models\Lokasi;

class InventoryController extends Controller
{
    # Controller Data Alat
    public function alat(Request $request) {
        $data = Inventory::with('nama_alat', 'room', 'lokasi')
                    ->join('room', 'room.kodeRuangan', '=', 'inventories.lokasiAlat')
                    ->join('lokasi', 'room.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->join('nama_alat', 'nama_alat.kode_nama_alat', '=', 'inventories.namaAlat')
                    ->select(
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'nama_alat.nama_alat',
                        'room.kodeRuangan',
                        'inventories.kodeAlat',
                        'inventories.kondisiAlat',
                        'inventories.statusAlat',
                    );

        if($request -> has ('search')) {
            $data = Inventory::where('namaAlat','LIKE','%' .$request -> search.'%') -> paginate(10);
        } else {
            $data = Inventory::paginate(10);
        }
        return view('inventory.dataalat', compact('data'));
    }

    # Controller Input Data
    public function tambahalat() {
        $nama_alat = NamaAlat::all();
        $room = Room::all();
        $lokasi = Lokasi::all();
        return view('inventory.tambahdata', compact('nama_alat', 'lokasi', 'room'));
    }

    public function masukkanalat(Request $request) {
        //dd($request->all());
        Inventory::create($request->all());
        return redirect()->route('alat') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editalat($id) {
        $data = Inventory::where('kodeAlat', $id)->first();
        $nama_alat = NamaAlat::all();
        $room = Room::all();
        $lokasi = Lokasi::all();
        //dd($data);
        return view('inventory.editdata', compact('data', 'nama_alat', 'lokasi', 'room'));
    }
    
    public function updatealat(Request $request, $id) {
        $data = Inventory::where('kodeAlat', $id);
        $data->update([
            'kodeAlat' => $request->kodeAlat,
            'namaAlat' => $request->namaAlat,
            'lokasiAlat' => $request->lokasiAlat,
            'kondisiAlat' => $request->kondisiAlat,
            'statusAlat' => $request->statusAlat,
        ]);
        return redirect()->route('alat') -> with('success','Data berhasil diperbaharui');
    }

    public function hapusalat($id) {
        $data = Inventory::where('kodeAlat', $id);
        $data -> delete();
        return redirect()->route('alat') -> with('success','Data berhasil dihapus');
    }
}