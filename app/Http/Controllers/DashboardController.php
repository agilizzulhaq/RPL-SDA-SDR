<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\PeminjamanAlat;
use App\Models\PenjadwalanRuangan;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembelian;
use App\Models\PerawatanAlat;
use App\Models\PerawatanRuangan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlat = Inventory::count();
        $totalRuangan = Room::count();

        // $todayDate = Carbon::now()->format('d-m-Y');

        $totalPeminjamanAlat = PeminjamanAlat::count();
        $todayPeminjamanAlat = PeminjamanAlat::where('status_peminjaman', 'dipinjam')->count();

        $totalPenjadwalanRuangan = PenjadwalanRuangan::count();
        $todayPenjadwalanRuangan = PenjadwalanRuangan::where('statusRuangan', 'Tidak Tersedia')->count();

        $userLevel = Auth::user()->level;

        $pembelian = Pembelian::all();
        $peminjaman_alat = PeminjamanAlat::all();
        $perawatan_alat = PerawatanAlat::all();
        $penjadwalan_ruangan = PenjadwalanRuangan::all();
        $perawatan_ruangan = PerawatanRuangan::all();
        $inventory = Inventory::all();
        $room = Room::all();

        return view('dashboard', compact('totalAlat', 'totalRuangan', 'totalPeminjamanAlat', 'todayPeminjamanAlat', 'totalPenjadwalanRuangan', 'todayPenjadwalanRuangan','userLevel','pembelian','peminjaman_alat','perawatan_alat','penjadwalan_ruangan','perawatan_ruangan','inventory','room'));

         // Fetch the orders data from the database

        // return view('dashboard', ['pembelian' => $pembelian]);
    }

}
