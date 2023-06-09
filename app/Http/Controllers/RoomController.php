<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Http\Middleware\CekUserLogin;

class RoomController extends Controller
{
    public function ruangan(Request $request) {
        $keyword = '%' . request('keyword') . '%';

        $data = Room::with('lokasi')
                    ->join('lokasi', 'rooms.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->select(
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'rooms.kodeRuangan',
                        'rooms.kapasitas',
                        'rooms.jenisRuangan',
                        'rooms.namaRuangan',
                        'rooms.statusRuangan',
                    )
                    ->where('rooms.jenisRuangan', 'like', $keyword)
                    ->orWhere('rooms.namaRuangan', 'like', $keyword)
                    ->orWhere('rooms.statusRuangan', 'like', $keyword)
                    ->orWhere('lokasi.nama_gedung', 'like', $keyword)
                    ->paginate(10);
                    
        // if($request -> has ('search')) {
        //     $data = Room::where('namaRuangan','LIKE','%' .$request -> search.'%') -> paginate(10);
        // } else {
        //     $data = Room::paginate(10);
        // }

        $lokasi = Lokasi::all();
        return view('room.dataruangan', compact('data'));
    }

    public function __construct()
    {
        $this->middleware(CekUserLogin::class . ':1')->only(['tambahruangan', 'massukanruangan','editruangan','editruangan','hapusruangan']);
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