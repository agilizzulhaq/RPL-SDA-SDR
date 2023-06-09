<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    # Controller Data Pengguna
    public function users(Request $request) {
        // if($request -> has ('search')) {
        //     $data = Pengguna::where('nama_user','LIKE','%' .$request -> search.'%') -> paginate(10);
        // } else {
        //     $data = Pengguna::paginate(10);
        // }

        $keyword = '%' . request('keyword') . '%';
        $data = Pengguna::latest()
                        ->where('penggunas.nama_user', 'like', $keyword)
                        ->orWhere('penggunas.alamat_user', 'like', $keyword)
                        ->orWhere('penggunas.email_user', 'like', $keyword)
                        ->paginate(10);

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
        $data = Pengguna::where('id_user', $id)->first();
        return view('pengguna.editpengguna', compact('data'));
    }
    
    public function updateusers(Request $request, $id) {
        $data = Pengguna::where('id_user', $id);
        $data->update([
            'id_user' => $request->id_user,
            'nama_user' => $request->nama_user,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_user' => $request->alamat_user,
            'email_user' => $request->email_user,
            'role_user' => $request->role_user
        ]);
        return redirect()->route('users') -> with('success','Data berhasil diperbaharui');
    }

    public function deleteusers($id) {
        $data = Pengguna::where('id_user', $id);
        $data -> delete();
        return redirect()->route('users') -> with('success','Data berhasil dihapus');
    }
}