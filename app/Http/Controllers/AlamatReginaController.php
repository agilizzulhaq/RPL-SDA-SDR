<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\AlamatRegina;
use App\Models\MahasiswaRegina;

class AlamatReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        $data = AlamatRegina::join();
        $alamatregina = AlamatRegina::latest()->paginate(5);
        
        return view('alamatregina.index',compact('alamatregina'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        return view('alamatregina.create', compact('mahasiswa'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'mahasiswa' => 'required',
            'alamat' => 'required',
        ]);
        
        AlamatRegina::create($request->all());
         
        return redirect()->route('alamatregina.index')
                        ->with('success','Alamat created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(AlamatRegina $alamatregina): View
    {
        return view('alamatregina.show',compact('alamatregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlamatRegina $alamatregina): View
    {
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        return view('alamatregina.edit',compact('alamatregina', 'mahasiswa'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlamatRegina $alamatregina): RedirectResponse
    {
        $request->validate([
            'mahasiswa' => 'required',
            'alamat' => 'required',
        ]);
        
        $alamatregina->update($request->all());
        
        return redirect()->route('alamatregina.index')
                        ->with('success','Alamat updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlamatRegina $alamatregina): RedirectResponse
    {
        $alamatregina->delete();
         
        return redirect()->route('alamatregina.index')
                        ->with('success','Alamat deleted successfully');
    }
}
