<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Middleware\CekUserLogin;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lokasi = Lokasi::latest()->paginate(10);
        
        return view('lokasi.index',compact('lokasi'))
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
        return view('lokasi.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_lokasi' => 'required',
            'nama_gedung' => 'required',
            'lantai' => 'required',
        ]);
        
        Lokasi::create($request->all());
         
        return redirect()->route('lokasi.index')
                        ->with('success','Data lokasi berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    
    public function show(Lokasi $lokasi): View
    {
        return view('lokasi.show',compact('lokasi'));
    }
    
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lokasi $lokasi): View
    {
        return view('lokasi.edit',compact('lokasi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lokasi $lokasi): RedirectResponse
    {
        $request->validate([
            'kode_lokasi' => 'required',
            'nama_gedung' => 'required',
            'lantai' => 'required',
        ]);
        
        $lokasi->update($request->all());
        
        return redirect()->route('lokasi.index')
                        ->with('success','Data lokasi berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lokasi $lokasi): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $lokasi->delete();

        return redirect()->route('lokasi.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
