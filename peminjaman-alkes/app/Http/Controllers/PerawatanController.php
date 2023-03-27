<?php

namespace App\Http\Controllers;

use App\Models\Perawatan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $perawatans = Perawatan::latest()->paginate(5);
        
        return view('perawatans.index',compact('perawatans'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('perawatans.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kodealat' => 'required',
            'namaalat' => 'required',
            'lokasialat' => 'required',
            'jenisperawatan' => 'required',
            'catatanperawatan' => 'required',
            'tanggalperawatan' => 'required',
        ]);
        
        Perawatan::create($request->all());
         
        return redirect()->route('perawatans.index')
                        ->with('success','Data perawatan berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Perawatan $perawatan): View
    {
        return view('perawatans.show',compact('perawatan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perawatan $perawatan): View
    {
        return view('perawatans.edit',compact('perawatan'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perawatan $perawatan): RedirectResponse
    {
        $request->validate([
            'kodealat' => 'required',
            'namaalat' => 'required',
            'lokasialat' => 'required',
            'jenisperawatan' => 'required',
            'catatanperawatan' => 'required',
            'tanggalperawatan' => 'required',
        ]);
        
        $perawatan->update($request->all());
        
        return redirect()->route('perawatans.index')
                        ->with('success','Data perawatan berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perawatan $perawatan): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $perawatan->delete();

        return redirect()->route('perawatans.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
