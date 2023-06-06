<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\MatkulRegina;
use App\Models\NilaiMKRegina;
use App\Models\MahasiswaRegina;

class NilaiMKReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $matkul = MatkulRegina::select('id', 'namamatkul')->get();
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        $data = NilaiMKRegina::join();
        $nilaimkregina = NilaiMKRegina::latest()->paginate(5);
        
        return view('nilaimkregina.index',compact('nilaimkregina', 'mahasiswa', 'matkul'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $matkul = MatkulRegina::select('id', 'namamatkul')->get();
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        return view('nilaimkregina.create', compact('matkul', 'mahasiswa'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'mahasiswa' => 'required',
            'matkul' => 'required',
            'nilai' => 'required',
        ]);
        
        NilaiMK::create($request->all());
         
        return redirect()->route('nilaimkregina.index')
                        ->with('success','Nilai created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(NilaiMK $nilaimkregina): View
    {
        return view('nilaimkregina.show',compact('nilaimkregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiMK $nilaimkregina): View
    {
        $matkul = MatkulRegina::select('id', 'namamatkul')->get();
        $mahasiswa = MahasiswaRegina::select('id', 'nama')->get();
        return view('nilaimkregina.edit',compact('nilaimkregina', 'matkul', 'mahasiswa'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiMK $nilaimkregina): RedirectResponse
    {
        $request->validate([
            'mahasiswa' => 'required',
            'matkul' => 'required',
            'nilai' => 'required',
        ]);
        
        $nilaimkregina->update($request->all());
        
        return redirect()->route('nilaimkregina.index')
                        ->with('success','Nilai updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiMK $nilaimkregina): RedirectResponse
    {
        $nilaimkregina->delete();
         
        return redirect()->route('nilaimkregina.index')
                        ->with('success','Nilai deleted successfully');
    }
}
