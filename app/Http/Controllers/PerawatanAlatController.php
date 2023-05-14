<?php

namespace App\Http\Controllers;

use App\Models\PerawatanAlat;
use App\Models\Inventory;
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
        $perawatan_alat = PerawatanAlat::with('Inventory')
                    ->join('inventories', 'perawatan_alat.kode_alat', '=', 'inventories.kodeAlat')
                    ->select(
                        'inventories.kodeAlat',
                        'inventories.namaAlat',
                        'inventories.lokasiAlat',
                        'perawatan_alat.id_perawatan',
                        'perawatan_alat.jenis_perawatan',
                        'perawatan_alat.status_perawatan',
                        'perawatan_alat.tanggal_perawatan',
                        'perawatan_alat.riwayat_perawatan',
                        'perawatan_alat.catatan_perawatan',
                    )
                    ->latest('perawatan_alat.created_at')
                    ->paginate(10);

        $inventory = Inventory::all();
        
        return view('perawatan_alat.index',compact('perawatan_alat', 'inventory'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inventory = Inventory::all();
        return view('perawatan_alat.create', compact('inventory'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kode_alat' => 'required',
            'jenis_perawatan' => 'required',
            'status_perawatan' => 'required',
            'tanggal_perawatan',
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
        $inventory = Inventory::all();
        return view('perawatan_alat.edit',compact('perawatan_alat', 'inventory'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerawatanAlat $perawatan_alat): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kode_alat' => 'required',
            'jenis_perawatan' => 'required',
            'status_perawatan' => 'required',
            'tanggal_perawatan',
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
