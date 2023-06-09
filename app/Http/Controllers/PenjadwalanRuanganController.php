<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Lokasi;
use App\Models\Pengguna;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PenjadwalanRuangan;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\CekUserLogin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PenjadwalanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $keyword = '%' . request('keyword') . '%';

        $penjadwalanruangan = DB::table('penjadwalan_ruangans')
                    ->join('rooms', 'penjadwalan_ruangans.kodeRuangan', '=', 'rooms.kodeRuangan')
                    ->join('lokasi', 'rooms.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                    ->select(
                        'rooms.namaRuangan',
                        'rooms.lokasiRuangan',
                        'rooms.kodeRuangan',
                        'lokasi.nama_gedung',
                        'lokasi.lantai',
                        'penjadwalan_ruangans.statusRuangan',
                        'penjadwalan_ruangans.namaPeminjam',
                        'penjadwalan_ruangans.id_penjadwalan',
                        'penjadwalan_ruangans.tanggalMasuk',
                        'penjadwalan_ruangans.tanggalKeluar',
                    )
                    ->where('rooms.namaRuangan', 'like', $keyword)
                    ->orWhere('lokasi.nama_gedung', 'like', $keyword)
                    ->orWhere('lokasi.lantai', 'like', $keyword)
                    ->orWhere('penjadwalan_ruangans.namaPeminjam', 'like', $keyword)
                    ->orWhere('penjadwalan_ruangans.statusRuangan', 'like', $keyword)
                    ->paginate(10);
                    
        return view('penjadwalanruangan.index',compact('penjadwalanruangan'));
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

    // public function __construct()
    // {
    //     $this->middleware(CekUserLogin::class . ':2,3')->only(['edit', 'destroy','update']);
    //     // $this->middleware(CekUserLogin::class . ':1,2,3')->only(['create', 'store']);
    // }

    public function edit(PenjadwalanRuangan $penjadwalanruangan): View
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
        $room = Room::all();
        $pengguna = Pengguna::all();
        return view('penjadwalanruangan.edit',compact('penjadwalanruangan', 'room', 'pengguna'));
    }
    else {
        // Redirect or display an error message
        return redirect('login')->with('error', 'Anda tidak memiliki akses');
    }
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PenjadwalanRuangan $penjadwalanruangan): RedirectResponse
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
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
        else {
            // Redirect or display an error message
            return redirect('login')->with('error', 'Anda tidak memiliki akses');
        }
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenjadwalanRuangan $penjadwalanruangan): RedirectResponse
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $penjadwalanruangan->delete();

        return redirect()->route('penjadwalanruangan.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
        }
        else {
            // Redirect or display an error message
            return redirect('login')->with('error', 'Anda tidak memiliki akses');
        }
    }
}
