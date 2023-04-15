<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function ruangan(Request $request) {
        if($request -> has ('search')) {
            $data = Room::where('namaRuangan','LIKE','%' .$request -> search.'%') -> paginate(5);
        } else {
            $data = Room::paginate(5);
        }
        return view('ruangan.dataruangan', compact('data'));
    }

    public function addruangan() {
        return view('ruangan.tambahdata');
    }

    public function insertruangan(Request $request) {
        Room::create($request->all());
        return redirect()->route('ruangan') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editruangan($id) {
        $data = Room::find($id);
        //dd($data);
        return view('ruangan.editdata', compact('data'));
    }
    
    public function updateruangan(Request $request, $id) {
        $data = Room::find($id);
        $data -> update($request -> all());
        return redirect()->route('ruangan') -> with('success','Data berhasil diperbaharui');
    }

    public function deleteruangan($id) {
        $data = Room::find($id);
        $data -> delete();
        return redirect()->route('ruangan') -> with('success','Data berhasil dihapus');
    }
}