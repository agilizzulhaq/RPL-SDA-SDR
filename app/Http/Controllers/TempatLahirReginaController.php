<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\TempatLahirRegina;

class TempatLahirReginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tempatlahirregina = TempatLahirRegina::latest()->paginate(5);
        
        return view('tempatlahirregina.index',compact('tempatlahirregina'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tempatlahirregina.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kota'
        ]);
        
        TempatLahirRegina::create($request->all());
         
        return redirect()->route('tempatlahirregina.index')
                        ->with('success','Kota created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(TempatLahirRegina $tempatlahirregina): View
    {
        return view('tempatlahirregina.show',compact('tempatlahirregina'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TempatLahirRegina $tempatlahirregina): View
    {
        return view('tempatlahirregina.edit',compact('tempatlahirregina'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TempatLahirRegina $tempatlahirregina): RedirectResponse
    {
        $request->validate([
            'kota' => 'required',
        ]);
        
        $tempatlahirregina->update($request->all());
        
        return redirect()->route('tempatlahirregina.index')
                        ->with('success','TempatLahir updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TempatLahirRegina $tempatlahirregina): RedirectResponse
    {
        $tempatlahirregina->delete();
         
        return redirect()->route('tempatlahirregina.index')
                        ->with('success','TempatLahir deleted successfully');
    }
}
