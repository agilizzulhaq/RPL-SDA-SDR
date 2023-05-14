<?php

namespace App\Http\Controllers;

use App\Models\PerawatanRuangan;
use App\Models\Room;
use App\Models\Pengguna;
use App\Models\Lokasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PerawatanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $perawatanruangan = PerawatanRuangan::with('Room', 'lokasi')
                    ->join('rooms', 'rooms.kodeRuangan', '=', 'perawatan_ruangans.kodeRuangan')
                    ->join('lokasi', 'room.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->select(
                        'rooms.kodeRuangan',
                        'rooms.namaRuangan',
                        'rooms.lokasiRuangan',
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'perawatan_ruangans.id_perawatan',
                        'perawatan_ruangans.statusPerawatan',
                        'perawatan_ruangans.history',
                        'perawatan_ruangans.kondisi',
                    );

        $room = Room::all();
        $lokasi = Lokasi::all();

        $perawatanruangan = PerawatanRuangan::paginate(10);
        return view('perawatanruangan.index',compact('perawatanruangan', 'room', 'lokasi'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $room = Room::all();
        return view('perawatanruangan.create', compact('room'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kodeRuangan' => 'required',
            'kondisi' => 'required',
            'history',
            'statusPerawatan' => 'required',
        ]);
        
        PerawatanRuangan::create($request->all());
         
        return redirect()->route('perawatanruangan.index')
                        ->with('success','Data perawatan berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(PerawatanRuangan $perawatanruangan): View
    {
        return view('perawatanruangan.show',compact('perawatanruangan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerawatanRuangan $perawatanruangan): View
    {
        $room = Room::all();
        $pengguna = Pengguna::all();
        return view('perawatanruangan.edit',compact('perawatanruangan', 'room', 'pengguna'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerawatanRuangan $perawatanruangan): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kodeRuangan' => 'required',
            'kondisi' => 'required',
            'history',
            'statusPerawatan' => 'required',
        ]);
        
        $perawatanruangan->update($request->all());
        
        return redirect()->route('perawatanruangan.index')
                        ->with('success','Data perawatan berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerawatanRuangan $perawatanruangan): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $perawatanruangan->delete();

        return redirect()->route('perawatanruangan.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
