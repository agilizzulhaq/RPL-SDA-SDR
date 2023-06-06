<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\TempatLahirRegina;
use App\Models\ProdiRegina;
use App\Models\MahasiswaRegina;

class MahasiswaReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $prodi = ProdiRegina::select('id', 'namaprodi')->get();
        $tempatlahir = TempatLahirRegina::select('id', 'kota')->get();
        $mahasiswaregina = MahasiswaRegina::join();
        $mahasiswaregina = MahasiswaRegina::latest()->paginate(5);
        
        return view('mahasiswaregina.index',compact('mahasiswaregina', 'prodi', 'tempatlahir'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $prodi = ProdiRegina::select('id', 'namaprodi')->get();
        $tempatlahir = TempatLahirRegina::select('id', 'kota')->get();
        return view('mahasiswaregina.create', compact( 'prodi', 'tempatlahir'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
        ]);
        
        MahasiswaRegina::create($request->all());
         
        return redirect()->route('mahasiswaregina.index')
                        ->with('success','Mahasiswa created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(MahasiswaRegina $mahasiswaregina): View
    {
        return view('mahasiswaregina.show',compact('mahasiswaregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MahasiswaRegina $mahasiswaregina): View
    {
        $prodi = ProdiRegina::select('id', 'namaprodi')->get();
        $tempatlahir = TempatLahirRegina::select('id', 'kota')->get();
        return view('mahasiswaregina.edit',compact('mahasiswaregina', 'prodi', 'tempatlahir'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MahasiswaRegina $mahasiswaregina): RedirectResponse
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
        ]);
        
        $mahasiswaregina->update($request->all());
        
        return redirect()->route('mahasiswaregina.index')
                        ->with('success','Mahasiswa updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MahasiswaRegina $mahasiswaregina): RedirectResponse
    {
        $mahasiswaregina->delete();
         
        return redirect()->route('mahasiswaregina.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}
