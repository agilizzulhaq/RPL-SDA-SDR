<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    # Controller Data Pengguna
    public function users(Request $request) {
        if($request -> has ('search')) {
            $data = Pengguna::where('nama_user','LIKE','%' .$request -> search.'%') -> paginate(10);
        } else {
            $data = Pengguna::paginate(10);
        }
        return view('pengguna.datapengguna', compact('data'));
    }

    # Controller Input Data
    public function addusers() {
        return view('pengguna.addpengguna');
    }

    public function insertusers(Request $request) {
        Pengguna::create($request->all());
        return redirect()->route('users') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editusers($id) {
        $data = Pengguna::find($id);
        return view('pengguna.editpengguna', compact('data'));
    }
    
    public function updateusers(Request $request, $id) {
        $data = Pengguna::find($id);
        $data -> update($request -> all());
        return redirect()->route('users') -> with('success','Data berhasil diperbaharui');
    }

    public function deleteusers($id) {
        $data = Pengguna::find($id);
        $data -> delete();
        return redirect()->route('users') -> with('success','Data berhasil dihapus');
    }
}