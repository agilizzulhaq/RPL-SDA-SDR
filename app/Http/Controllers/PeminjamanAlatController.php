<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanAlat;
use App\Models\NamaAlat;
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
        $peminjaman_alat = PeminjamanAlat::latest()->paginate(5);
        
        return view('peminjaman_alat.index',compact('peminjaman_alat'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('peminjaman_alat.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'nama_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjam' => 'required',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        PeminjamanAlat::create($request->all());
         
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
        return view('peminjaman_alat.edit',compact('peminjaman_alat'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeminjamanAlat $peminjaman_alat): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'nama_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjam' => 'required',
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
