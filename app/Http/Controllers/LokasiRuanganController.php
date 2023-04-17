<?php

namespace App\Http\Controllers;

use App\Models\LokasiRuangan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LokasiRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lokasi_ruangan = LokasiRuangan::latest()->paginate(5);
        
        return view('lokasi_ruangan.index',compact('lokasi_ruangan'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('lokasi_ruangan.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_lokasi_ruangan' => 'required',
            'lokasi_ruangan' => 'required',
        ]);
        
        LokasiRuangan::create($request->all());
         
        return redirect()->route('lokasi_ruangan.index')
                        ->with('success','Data lokasi ruangan berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    
    public function show(LokasiRuangan $lokasi_ruangan): View
    {
        return view('lokasi_ruangan.show',compact('lokasi_ruangan'));
    }
    
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LokasiRuangan $lokasi_ruangan): View
    {
        return view('lokasi_ruangan.edit',compact('lokasi_ruangan'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LokasiRuangan $lokasi_ruangan): RedirectResponse
    {
        $request->validate([
            'kode_lokasi_ruangan' => 'required',
            'lokasi_ruangan' => 'required',
        ]);
        
        $lokasi_ruangan->update($request->all());
        
        return redirect()->route('lokasi_ruangan.index')
                        ->with('success','Data lokasi ruangan berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LokasiRuangan $lokasi_ruangan): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $lokasi_ruangan->delete();

        return redirect()->route('lokasi_ruangan.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
