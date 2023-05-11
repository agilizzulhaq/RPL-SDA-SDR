<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $admins = Admin::latest()->paginate(10);

        return view('admins.index', compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);

        Admin::create($request->all());
        return redirect()->route('admins.index')
            ->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin): View
    {
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin): View
    {
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin): RedirectResponse
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);

        $admin->update($request->all());

        return redirect()->route('admins.index')
            ->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin): RedirectResponse
    {
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Admin deleted successfully');
    }
}
