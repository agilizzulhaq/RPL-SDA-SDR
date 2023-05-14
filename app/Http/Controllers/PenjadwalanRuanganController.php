<?php

namespace App\Http\Controllers;

use App\Models\PenjadwalanRuangan;
use App\Models\Room;
use App\Models\Pengguna;
use App\Models\Lokasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenjadwalanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $penjadwalanruangan = PenjadwalanRuangan::with('Room', 'Pengguna', 'lokasi')
                    ->join('rooms', 'rooms.kodeRuangan', '=', 'penjadwalan_ruangans.kodeRuangan')
                    ->join('penggunas', 'penggunas.id_user', '=', 'penjadwalan_ruangans.namaPeminjam')
                    ->join('lokasi', 'room.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->select(
                        'rooms.kodeRuangan',
                        'rooms.namaRuangan',
                        'rooms.jenisRuangan',
                        'rooms.lokasiRuangan',
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'penggunas.nama_user',
                        'penjadwalan_ruangans.statusRuangan',
                        'penjadwalan_ruangans.tanggalMasuk',
                        'penjadwalan_ruangans.tanggalKeluar',
                    );

        $room = Room::all();
        $pengguna = Pengguna::all();
        $lokasi = Lokasi::all();

        $penjadwalanruangan = PenjadwalanRuangan::paginate(10);
        return view('penjadwalanruangan.index',compact('penjadwalanruangan', 'room', 'pengguna', 'lokasi'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $room = Room::all();
        $pengguna = Pengguna::all();
        return view('penjadwalanruangan.create', compact('room', 'pengguna'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_penjadwalan' => 'required',
            'kodeRuangan' => 'required',
            'namaPeminjam' => 'required',
            'statusRuangan' => 'required',
            'tanggalMasuk' => 'required',
            'tanggalKeluar',
        ]);
        
        PenjadwalanRuangan::create($request->all());
         
        return redirect()->route('penjadwalanruangan.index')
                        ->with('success','Data penjadwalan berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(PenjadwalanRuangan $penjadwalanruangan): View
    {
        return view('penjadwalanruangan.show',compact('penjadwalanruangan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenjadwalanRuangan $penjadwalanruangan): View
    {
        $room = Room::all();
        $pengguna = Pengguna::all();
        return view('penjadwalanruangan.edit',compact('penjadwalanruangan', 'room', 'pengguna'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PenjadwalanRuangan $penjadwalanruangan): RedirectResponse
    {
        $request->validate([
            'id_penjadwalan' => 'required',
            'kodeRuangan' => 'required',
            'namaPeminjam' => 'required',
            'statusRuangan' => 'required',
            'tanggalMasuk' => 'required',
            'tanggalKeluar',
        ]);
        
        $penjadwalanruangan->update($request->all());
        
        return redirect()->route('penjadwalanruangan.index')
                        ->with('success','Data penjadwalan berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenjadwalanRuangan $penjadwalanruangan): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $penjadwalanruangan->delete();

        return redirect()->route('penjadwalanruangan.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
