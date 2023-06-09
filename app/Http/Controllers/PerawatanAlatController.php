<?php

namespace App\Http\Controllers;

use App\Models\PerawatanAlat;
use App\Models\Inventory;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Middleware\CekUserLogin;
use Psy\Command\WhereamiCommand;
use Illuminate\Support\Facades\DB;


class PerawatanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $keyword = '%' . request('keyword') . '%';

        $perawatan_alat = DB::table('perawatan_alat')
                    ->join('inventories', 'perawatan_alat.kode_alat', '=', 'inventories.kodeAlat')
                    ->join('nama_alat', 'nama_alat.kode_nama_alat', '=', 'inventories.namaAlat')
                    ->select(
                        'inventories.kodeAlat',
                        'nama_alat.nama_alat',
                        'perawatan_alat.id_perawatan',
                        'perawatan_alat.jenis_perawatan',
                        'perawatan_alat.status_perawatan',
                        'perawatan_alat.tanggal_perawatan',
                        'perawatan_alat.riwayat_perawatan',
                        'perawatan_alat.catatan_perawatan',
                    )
                    ->where('perawatan_alat.jenis_perawatan', 'like', $keyword)
                    ->orWhere('nama_alat.nama_alat', 'like', $keyword)
                    ->orWhere('perawatan_alat.status_perawatan', 'like', $keyword)
                    ->orWhere('perawatan_alat.riwayat_perawatan', 'like', $keyword)
                    ->orWhere('perawatan_alat.catatan_perawatan', 'like', $keyword)
                    ->latest('perawatan_alat.created_at')
                    ->paginate(10);
        
        return view('perawatan_alat.index',compact('perawatan_alat'))
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
    public function __construct()
    {
        $this->middleware(CekUserLogin::class . ':2')->only(['edit', 'destroy','update']);
        // $this->middleware(CekUserLogin::class . ':1,2')->only(['create', 'store']);
    }

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
