<?php

namespace App\Http\Controllers;

use App\Models\Ruangans;
use App\Http\Requests\StoreRuangansRequest;
use App\Http\Requests\UpdateRuangansRequest;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use Illuminate\Http\Request;

class RuangansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        'ruangans' -> Ruangans::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRuangansRequest $request)
    {
        $validate = $request->validated();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangans $ruangans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruangans $ruangans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRuangansRequest $request, Ruangans $ruangans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangans $ruangans)
    {
        //
    }
}
