<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class RoomController extends Controller
{
    public function ruangan(Request $request) {
        $data = Room::with('lokasi')
                    ->join('lokasi', 'room.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->select(
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'room.kodeRuangan',
                        'room.kapasitas',
                        'room.jenisRuangan',
                        'room.namaRuangan',
                        'room.statusRuangan',
                    );
                    
        if($request -> has ('search')) {
            $data = Room::where('namaRuangan','LIKE','%' .$request -> search.'%') -> paginate(10);
        } else {
            $data = Room::paginate(10);
        }

        $lokasi = Lokasi::all();
        return view('room.dataruangan', compact('data', 'lokasi'));
    }

    public function tambahruangan() {
        $lokasi = Lokasi::all();
        return view('room.tambahdata', compact('lokasi'));
    }

    public function masukkanruangan(Request $request) {
        Room::create($request->all());
        return redirect()->route('ruangan') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editruangan($id) {
        $data = Room::where('kodeRuangan', $id)->first();
        $lokasi = Lokasi::all();
        //dd($data);
        return view('room.editdata', compact('data', 'lokasi'));
    }
    
    public function updateruangan(Request $request, $id) {
        $data = Room::where('kodeRuangan', $id);
        $data->update([
            'kodeRuangan' => $request->kodeRuangan,
            'jenisRuangan' => $request->jenisRuangan,
            'namaRuangan' => $request->namaRuangan,
            'lokasiRuangan' => $request->lokasiRuangan,
            'statusRuangan' => $request->statusRuangan,
        ]);
        return redirect()->route('ruangan') -> with('success','Data berhasil diperbaharui');
    }

    public function hapusruangan($id) {
        $data = Room::where('kodeRuangan', $id);
        $data -> delete();
        return redirect()->route('ruangan') -> with('success','Data berhasil dihapus');
    }
}