<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    # Controller Data Vendor
    public function vendor(Request $request) {
        if($request -> has ('search')) {
            $data = Vendor::where('nama_user','LIKE','%' .$request -> search.'%') -> paginate(10);
        } else {
            $data = Vendor::paginate(10);
        }
        return view('vendor.datavendor', compact('data'));
    }

    # Controller Input Data
    public function addvendor() {
        return view('vendor.addvendor');
    }

    public function insertvendor(Request $request) {
        Vendor::create($request->all());
        return redirect()->route('vendor') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editvendor($id) {
        $data = Vendor::where('id_vendor', $id)->first();
        return view('vendor.editvendor', compact('data'));
    }

    public function updatevendor(Request $request, $id) {
        $data = Vendor::where('id_vendor', $id);
        $data->update([
            'id_vendor' => $request->id_vendor,
            'nama_vendor' => $request->nama_vendor,
            'alamat_vendor' => $request->alamat_vendor,
            'email_vendor' => $request->email_vendor,
            'nomor_telepon' => $request->nomor_telepon,
        ]);
        return redirect()->route('vendor') -> with('success','Data berhasil diperbaharui');
    }

    public function deletevendor($id) {
        $data = Vendor::where('id_vendor', $id);
        $data -> delete();
        return redirect()->route('vendor') -> with('success','Data berhasil dihapus');
    }
}
