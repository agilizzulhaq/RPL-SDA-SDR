<?php

namespace App\Http\Controllers;

use App\Models\Ware;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class WareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $wares = Ware::latest()->paginate(5);

        return view('wares.index', compact('wares'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('wares.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'wareid' => 'required',
            'namaware' => 'required',
            'jabatanware' => 'required',
        ]);

        Ware::create($request->all());

        return redirect()->route('wares.index')
            ->with('success', 'WareKeepers created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ware $ware): View
    {
        return view('wares.show', compact('ware'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ware $ware): View
    {
        return view('wares.edit', compact('ware'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ware $ware): RedirectResponse
    {
        $request->validate([
            'wareid' => 'required',
            'namaware' => 'required',
            'jabatanware' => 'required',
        ]);

        $ware->update($request->all());

        return redirect()->route('wares.index')
            ->with('success', 'WareKeepers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ware $ware): RedirectResponse
    {
        $ware->delete();

        return redirect()->route('wares.index')
            ->with('success', 'WareKeepers deleted successfully');
    }
}
