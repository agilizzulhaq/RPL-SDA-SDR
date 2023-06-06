<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\MatkulRegina;

class MatkulReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $matkulregina = MatkulRegina::latest()->paginate(5);
        
        return view('matkulregina.index',compact('matkulregina'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('matkulregina.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'namamatkul' => 'required',
        ]);
        
        MatkulRegina::create($request->all());
         
        return redirect()->route('matkulregina.index')
                        ->with('success','Matkul created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(MatkulRegina $matkulregina): View
    {
        return view('matkulregina.show',compact('matkulregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatkulRegina $matkulregina): View
    {
        return view('matkulregina.edit',compact('matkulregina'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MatkulRegina $matkulregina): RedirectResponse
    {
        $request->validate([
            'namamatkul' => 'required',
        ]);
        
        $matkulregina->update($request->all());
        
        return redirect()->route('matkulregina.index')
                        ->with('success','Matkul updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatkulRegina $matkulregina): RedirectResponse
    {
        $matkulregina->delete();
         
        return redirect()->route('matkulregina.index')
                        ->with('success','Matkul deleted successfully');
    }
}
