<?php
  
namespace App\Http\Controllers;

//namespace App\Http\Controllers\Admin;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
  
class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pembelians = Pembelian::latest()->paginate(5);
        
        return view('pembelian.index',compact('pembelians'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pembelian.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idPembelianAlat' => 'required',
            'namaAlat' => 'required',
            'tanggalPembelian' => 'required',
            'vendor' => 'required',
            'harga' => 'required',
            'alasan' => 'required',
            'status' => 'required',
        ]);
        
        Pembelian::create($request->all());
         
        return redirect()->route('pembelian.index')
                        ->with('success','Pembelian created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian): View
    {
        return view('pembelian.show',compact('pembelian'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian): View
    {
        return view('pembelian.edit',compact('pembelian'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelian $pembelian): RedirectResponse
    {
        $request->validate([
            'idPembelianAlat' => 'required',
            'namaAlat' => 'required',
            'tanggalPembelian' => 'required',
            'vendor' => 'required',
            'harga' => 'required',
            'alasan' => 'required',
            'status' => 'required',
        ]);
        
        $pembelian->update($request->all());
        
        return redirect()->route('pembelian.index')
                        ->with('success','Pembelian updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelian $pembelian): RedirectResponse
    {
        $pembelian->delete();
         
        return redirect()->route('pembelian.index')
                        ->with('success','Pembelian deleted successfully');
    }
}