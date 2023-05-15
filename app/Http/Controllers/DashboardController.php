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

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalPeminjamanAlat = PeminjamanAlat::count();
        $todayPeminjamanAlat = PeminjamanAlat::whereDate('created_at', $todayDate)->count();

        $totalPenjadwalanRuangan = PenjadwalanRuangan::count();
        $todayPenjadwalanRuangan = PenjadwalanRuangan::whereDate('created_at', $todayDate)->count();

        return view('dashboard-admin', compact('totalAlat', 'totalRuangan', 'totalPeminjamanAlat', 'todayPeminjamanAlat', 'totalPenjadwalanRuangan', 'todayPenjadwalanRuangan'));
    }
}
