<?php

namespace App\Http\Controllers;

use App\Models\PerawatanAlat;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PerawatanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $perawatan_alat = PerawatanAlat::latest()->paginate(5);
        
        return view('perawatan_alat.index',compact('perawatan_alat'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('perawatan_alat.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'id_admin' => 'required',
            'id_keeper' => 'required',
            'id_user' => 'required',
            'nama_alat' => 'required',
            'lokasi_alat' => 'required',
            'jenis_perawatan' => 'required',
            'status_perawatan' => 'required',
            'riwayat_perawatan' => 'required',
            'catatan_perawatan' => 'required',
        ]);
        
        PerawatanAlat::create($request->all());
         
        return redirect()->route('perawatan_alat.index')
                        ->with('success','Data perawatan berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(PerawatanAlat $perawatan_alat): View
    {
        return view('perawatan_alat.show',compact('perawatan_alat'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerawatanAlat $perawatan_alat): View
    {
        return view('perawatan_alat.edit',compact('perawatan_alat'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerawatanAlat $perawatan_alat): RedirectResponse
    {
        $request->validate([
            'kode_alat' => 'required',
            'id_admin' => 'required',
            'id_keeper' => 'required',
            'id_user' => 'required',
            'nama_alat' => 'required',
            'lokasi_alat' => 'required',
            'jenis_perawatan' => 'required',
            'status_perawatan' => 'required',
            'riwayat_perawatan' => 'required',
            'catatan_perawatan' => 'required',
        ]);
        
        $perawatan_alat->update($request->all());
        
        return redirect()->route('perawatan_alat.index')
                        ->with('success','Data perawatan berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerawatanAlat $perawatan_alat): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $perawatan_alat->delete();

        return redirect()->route('perawatan_alat.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}