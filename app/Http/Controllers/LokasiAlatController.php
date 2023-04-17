<?php

namespace App\Http\Controllers;

use App\Models\LokasiAlat;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LokasiAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lokasi_alat = LokasiAlat::latest()->paginate(5);
        
        return view('lokasi_alat.index',compact('lokasi_alat'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('lokasi_alat.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_lokasi_alat' => 'required',
            'lokasi_alat' => 'required',
        ]);
        
        LokasiAlat::create($request->all());
         
        return redirect()->route('lokasi_alat.index')
                        ->with('success','Data lokasi alat berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    
    public function show(LokasiAlat $lokasi_alat): View
    {
        return view('lokasi_alat.show',compact('lokasi_alat'));
    }
    
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LokasiAlat $lokasi_alat): View
    {
        return view('lokasi_alat.edit',compact('lokasi_alat'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LokasiAlat $lokasi_alat): RedirectResponse
    {
        $request->validate([
            'kode_lokasi_alat' => 'required',
            'lokasi_alat' => 'required',
        ]);
        
        $lokasi_alat->update($request->all());
        
        return redirect()->route('lokasi_alat.index')
                        ->with('success','Data lokasi alat berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LokasiAlat $lokasi_alat): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $lokasi_alat->delete();

        return redirect()->route('lokasi_alat.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
