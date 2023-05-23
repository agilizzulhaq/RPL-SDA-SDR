<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\PeminjamanAlat;
use App\Models\PenjadwalanRuangan;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlat = Inventory::count();
        $totalRuangan = Room::count();

        // $todayDate = Carbon::now()->format('d-m-Y');

        // $totalPeminjamanAlat = PeminjamanAlat::count();
        $todayPeminjamanAlat = PeminjamanAlat::where('status_peminjaman', 'dipinjam')->count();

        // $totalPenjadwalanRuangan = PenjadwalanRuangan::count();
        $todayPenjadwalanRuangan = PenjadwalanRuangan::where('statusRuangan', 'Tidak Tersedia')->count();

        // return view('dashboard-admin', compact('todayDate', 'totalAlat', 'totalRuangan', 'totalPeminjamanAlat', 'todayPeminjamanAlat', 'totalPenjadwalanRuangan', 'todayPenjadwalanRuangan'));
        return view('dashboard-admin', compact('totalAlat', 'totalRuangan', 'todayPeminjamanAlat', 'todayPenjadwalanRuangan'));
        // return view('dashboard-admin', compact('totalAlat', 'totalRuangan', 'totalPeminjamanAlat', 'totalPenjadwalanRuangan'));
    }
}
