<?php

namespace App\Http\Controllers;

use App\Models\peminjaman_alat;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $peminjaman_alats = peminjaman_alat::latest()->paginate(5);
        
        return view('peminjaman_alats.index',compact('peminjaman_alats'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('peminjaman_alats.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'id_admin' => 'required',
            'id_user' => 'required',
            'nama_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjam' => 'required',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        peminjaman_alat::create($request->all());
         
        return redirect()->route('peminjaman_alats.index')
                        ->with('success','Data peminjaman_alat berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(peminjaman_alat $peminjaman_alat): View
    {
        return view('peminjaman_alats.show',compact('peminjaman_alat'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman_alat $peminjaman_alat): View
    {
        return view('peminjaman_alats.edit',compact('peminjaman_alat'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman_alat $peminjaman_alat): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'id_admin' => 'required',
            'id_user' => 'required',
            'nama_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjam' => 'required',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        $peminjaman_alat->update($request->all());
        
        return redirect()->route('peminjaman_alats.index')
                        ->with('success','Data peminjaman_alat berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman_alat $peminjaman_alat): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $peminjaman_alat->delete();

        return redirect()->route('peminjaman_alats.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
