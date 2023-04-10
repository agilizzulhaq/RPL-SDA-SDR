<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    # Controller Data Alat
    public function alat(Request $request) {
        if($request -> has ('search')) {
            $data = Inventory::where('namaAlat','LIKE','%' .$request -> search.'%') -> paginate(5);
        } else {
            $data = Inventory::paginate(5);
        }
        return view('inventory.dataalat', compact('data'));
    }

    # Controller Input Data
    public function tambahalat() {
        return view('inventory.tambahdata');
    }

    public function masukkandata(Request $request) {
        //dd($request->all());
        Inventory::create($request->all());
        return redirect()->route('alat') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editdata($id) {
        $data = Inventory::find($id);
        //dd($data);
        return view('inventory.editdata', compact('data'));
    }
    
    public function updatedata(Request $request, $id) {
        $data = Inventory::find($id);
        $data -> update($request -> all());
        return redirect()->route('alat') -> with('success','Data berhasil diperbaharui');
    }

    public function hapusdata($id) {
        $data = Inventory::find($id);
        $data -> delete();
        return redirect()->route('alat') -> with('success','Data berhasil dihapus');
    }
}