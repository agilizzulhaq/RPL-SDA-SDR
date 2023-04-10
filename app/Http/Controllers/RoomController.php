<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    # Controller Data Room
    public function ruangan(Request $request) {
        if($request -> has ('search')) {
            $data = Room::where('namaRuangan','LIKE','%' .$request -> search.'%') -> paginate(5);
        } else {
            $data = Room::paginate(5);
        }
        return view('room.dataruangan', compact('data'));
    }

    # Controller Input Data
    public function tambahruangan() {
        return view('room.tambahdata');
    }

    public function masukkandata(Request $request) {
        //dd($request->all());
        Room::create($request->all());
        return redirect()->route('ruangan') -> with('success','Data berhasil ditambahkan');
    }

    # Controller Edit Data
    public function editdata($id) {
        $data = Room::find($id);
        //dd($data);
        return view('room.editdata', compact('data'));
    }
    
    public function updatedata(Request $request, $id) {
        $data = Room::find($id);
        $data -> update($request -> all());
        return redirect()->route('ruangan') -> with('success','Data berhasil diperbaharui');
    }

    public function hapusdata($id) {
        $data = Room::find($id);
        $data -> delete();
        return redirect()->route('ruangan') -> with('success','Data berhasil dihapus');
    }
}
