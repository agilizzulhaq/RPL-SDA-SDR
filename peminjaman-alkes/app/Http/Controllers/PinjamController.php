<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pinjams = Pinjam::latest()->paginate(5);
        
        return view('pinjams.index',compact('pinjams'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pinjams.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kodealat' => 'required',
            'namaalat' => 'required',
            'namapeminjam' => 'required',
            'tanggalpinjam' => 'required',
        ]);
        
        Pinjam::create($request->all());
         
        return redirect()->route('pinjams.index')
                        ->with('success','Data pinjam berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam): View
    {
        return view('pinjams.show',compact('pinjam'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam): View
    {
        return view('pinjams.edit',compact('pinjam'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjam): RedirectResponse
    {
        $request->validate([
            'kodealat' => 'required',
            'namaalat' => 'required',
            'namapeminjam' => 'required',
            'tanggalpinjam' => 'required',
        ]);
        
        $pinjam->update($request->all());
        
        return redirect()->route('pinjams.index')
                        ->with('success','Data pinjam berhasil diperbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjam): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $pinjam->delete();

        return redirect()->route('pinjams.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
