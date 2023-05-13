<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanAlat;
use App\Models\NamaAlat;
use App\Models\Inventory;
use App\Models\Pengguna;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $peminjaman_alat = PeminjamanAlat::with('Inventory', 'NamaAlat', 'Pengguna')
                    ->join('inventories', 'peminjaman_alat.kode_alat', '=', 'inventories.kodeAlat')
                    ->join('nama_alat', 'inventories.kodeAlat', '=', 'nama_alat.kode_nama_alat')
                    ->join('penggunas', 'peminjaman_alat.nama_peminjam', '=', 'penggunas.id_user')
                    ->select(
                        'inventories.kodeAlat',
                        'nama_alat.nama_alat',
                        'inventories.namaAlat',
                        'penggunas.id_user',
                        'penggunas.nama_user',
                        'peminjaman_alat.id_peminjaman',
                        'peminjaman_alat.tanggal_peminjaman',
                        'peminjaman_alat.tanggal_pengembalian',
                        'peminjaman_alat.status_peminjaman',
                        'peminjaman_alat.alasan_peminjaman'
                    )
                    ->latest('peminjaman_alat.created_at')
                    ->paginate(10);

        $inventory = Inventory::all();
        $pengguna = Pengguna::all();
        
        return view('peminjaman_alat.index',compact('peminjaman_alat', 'inventory', 'pengguna'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inventory = Inventory::all();
        $namaalat = NamaAlat::all();
        $pengguna = Pengguna::all();
        return view('peminjaman_alat.create', compact('inventory', 'namaalat', 'pengguna'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_peminjaman' => 'required',
            'kode_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        PeminjamanAlat::create($request->all());
        $inventory = Inventory::all();
         
        return redirect()->route('peminjaman_alat.index')
                        ->with('success','Data pinjam berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(PeminjamanAlat $peminjaman_alat): View
    {
        return view('peminjaman_alat.show',compact('peminjaman_alat'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeminjamanAlat $peminjaman_alat): View
    {
        $inventory = Inventory::all();
        $namaalat = NamaAlat::all();
        $pengguna = Pengguna::all();
        return view('peminjaman_alat.edit',compact('peminjaman_alat', 'inventory', 'namaalat', 'pengguna'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeminjamanAlat $peminjaman_alat): RedirectResponse
    {
        $request->validate([
            'id_peminjaman' => 'required',
            'kode_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        $peminjaman_alat->update($request->all());
        
        return redirect()->route('peminjaman_alat.index')
                        ->with('success','Data pinjam berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeminjamanAlat $peminjaman_alat): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $peminjaman_alat->delete();

        return redirect()->route('peminjaman_alat.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
