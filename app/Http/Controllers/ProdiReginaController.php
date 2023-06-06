<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\ProdiRegina;

class ProdiReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $prodiregina = ProdiRegina::latest()->paginate(5);
        
        return view('prodiregina.index',compact('prodiregina'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('prodiregina.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'namaprodi' => 'required',
        ]);
        
        ProdiRegina::create($request->all());
         
        return redirect()->route('prodiregina.index')
                        ->with('success','Prodi created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(ProdiRegina $prodiregina): View
    {
        return view('prodiregina.show',compact('prodiregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdiRegina $prodiregina): View
    {
        return view('prodiregina.edit',compact('prodiregina'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdiRegina $prodiregina): RedirectResponse
    {
        $request->validate([
            'namaprodi' => 'required',
        ]);
        
        $prodiregina->update($request->all());
        
        return redirect()->route('prodiregina.index')
                        ->with('success','Prodi updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdiRegina $prodiregina): RedirectResponse
    {
        $prodiregina->delete();
         
        return redirect()->route('prodiregina.index')
                        ->with('success','Prodi deleted successfully');
    }
}
