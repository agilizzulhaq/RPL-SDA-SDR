<?php

namespace App\Http\Controllers;

use App\Models\NamaAlat;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Middleware\CekUserLogin;

class NamaAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $keyword = '%' . request('keyword') . '%';
        $nama_alat = NamaAlat::latest()
                        ->where('nama_alat.nama_alat', 'like', $keyword)
                        ->paginate(10);
        
        return view('nama_alat.index',compact('nama_alat'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function __construct()
    {
        $this->middleware(CekUserLogin::class . ':1')->only(['create', 'store','show','edit','update','destroy']);
    }

    public function create(): View
    {
        return view('nama_alat.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_nama_alat' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required',
            'limit' => 'required',
            'jenis_alat' => 'required',
            'pemakaian_alat' => 'required',
        ]);
        
        NamaAlat::create($request->all());
         
        return redirect()->route('nama_alat.index')
                        ->with('success','Data lokasi alat berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    
    public function show(NamaAlat $nama_alat): View
    {
        return view('nama_alat.show',compact('nama_alat'));
    }
    
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaAlat $nama_alat): View
    {
        return view('nama_alat.edit',compact('nama_alat'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaAlat $nama_alat): RedirectResponse
    {
        $request->validate([
            'kode_nama_alat' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required',
            'limit' => 'required',
            'jenis_alat' => 'required',
            'pemakaian_alat' => 'required',
        ]);
        
        $nama_alat->update($request->all());
        
        return redirect()->route('nama_alat.index')
                        ->with('success','Data lokasi alat berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NamaAlat $nama_alat): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $nama_alat->delete();

        return redirect()->route('nama_alat.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
