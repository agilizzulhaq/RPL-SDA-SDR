<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\NamaAlat;

class InventoryController extends Controller
{
    # Controller Data Alat
    public function alat(Request $request) {
        $data = Inventory::with('nama_alat')->get();
        if($request -> has ('search')) {
            $data = Inventory::where('namaAlat','LIKE','%' .$request -> search.'%') -> paginate(5);
        } else {
            $data = Inventory::paginate(5);
        }
        return view('inventory.dataalat', compact('data'));
    }

    # Controller Input Data
    public function tambahalat() {
        $nama_alat = NamaAlat::all();
        return view('inventory.tambahdata', compact('nama_alat'));
    }

    public function masukkanalat(Request $request) {
        //dd($request->all());
        Inventory::create($request->all());
        return redirect()->route('alat') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editalat($id) {
        $data = Inventory::find($id);
        $nama_alat = NamaAlat::all();
        //dd($data);
        return view('inventory.editdata', compact('data', 'nama_alat'));
    }
    
    public function updatealat(Request $request, $id) {
        $data = Inventory::find($id);
        $data -> update($request -> all());
        return redirect()->route('alat') -> with('success','Data berhasil diperbaharui');
    }

    public function hapusalat($id) {
        $data = Inventory::find($id);
        $data -> delete();
        return redirect()->route('alat') -> with('success','Data berhasil dihapus');
    }
}