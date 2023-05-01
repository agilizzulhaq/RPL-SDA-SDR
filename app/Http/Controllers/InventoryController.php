<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Lokasi;
use App\Models\NamaAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function __construct() {
        $this->Inventory = new Inventory();
    }

    # Controller Data Alat
    public function alat(Request $request) {
        $data = [
            'inventory' => $this->Inventory->allData()->first() ?? '',
        ];
      
        if($request -> has ('search')) {
            $data = Inventory::where('namaAlat','LIKE','%' .$request -> search.'%') -> paginate(5);
        } else {
            $data = Inventory::paginate(5);
        }
        return view('inventory.dataalat', compact('data'));
        
    }

    # Controller Input Data
    public function tambahalat() {
        $lokasi_alat = Lokasi::all();
        $nama_alat = NamaAlat::all();
        return view('inventory.tambahdata', compact('lokasi_alat', 'nama_alat'));
    }

    public function masukkanalat(Request $request) {
        //dd($request->all());
        Inventory::create($request->all());
        return redirect()->route('alat') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editalat($id) {
        $data = Inventory::find($id);
        $lokasi_alat = Lokasi::all();
        $nama_alat = NamaAlat::all();
        //dd($data);
        return view('inventory.editdata', compact('data', 'lokasi_alat', 'nama_alat'));
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