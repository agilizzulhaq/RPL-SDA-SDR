<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\NamaAlat;
use App\Models\Inventory;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\PerawatanAlat;
use App\Models\PeminjamanAlat;
use App\Models\PerawatanRuangan;
use App\Models\PenjadwalanRuangan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlat = NamaAlat::count();
        $totalRuangan = Room::count();

        // $todayDate = Carbon::now()->format('d-m-Y');

        $totalPeminjamanAlat = PeminjamanAlat::count();
        $todayPeminjamanAlat = PeminjamanAlat::where('status_peminjaman', 'dipinjam')->count();

        $totalPenjadwalanRuangan = PenjadwalanRuangan::count();
        $todayPenjadwalanRuangan = PenjadwalanRuangan::where('statusRuangan', 'Tidak Tersedia')->count();

        $userLevel = Auth::user()->level;

        $pembelian = Pembelian::with('NamaAlat')
                            ->join('nama_alat', 'pembelians.nama_alat', '=', 'nama_alat.kode_nama_alat')
                            ->join('vendors', 'pembelians.vendor', '=', 'vendors.id_vendor')
                            ->select(
                                'nama_alat.nama_alat',
                                'vendors.nama_vendor',
                                'pembelians.id_pembelian',
                                'pembelians.tanggal_pembelian',
                                'pembelians.harga_satuan',
                                'pembelians.jumlah_pembelian',
                                'pembelians.keterangan',
                                'pembelians.status',
                            )->get();
        $peminjaman_alat = DB::table('peminjaman_alat')
                            ->join('penggunas', 'peminjaman_alat.nama_peminjam', '=', 'penggunas.id_user')
                            ->join('inventories', 'peminjaman_alat.kode_alat', '=', 'inventories.kodeAlat')
                            ->join('nama_alat', 'inventories.namaAlat', '=', 'nama_alat.kode_nama_alat')
                            ->select(
                                'nama_alat.nama_alat',
                                'peminjaman_alat.kode_alat',
                                'peminjaman_alat.id_peminjaman',
                                'peminjaman_alat.tanggal_peminjaman',
                                'peminjaman_alat.tanggal_pengembalian',
                                'peminjaman_alat.status_peminjaman',
                                'peminjaman_alat.alasan_peminjaman',
                                'penggunas.nama_user'
                            )->get();
        $perawatan_alat = DB::table('perawatan_alat')
                            ->join('inventories', 'perawatan_alat.kode_alat', '=', 'inventories.kodeAlat')
                            ->join('nama_alat', 'nama_alat.kode_nama_alat', '=', 'inventories.namaAlat')
                            ->select(
                                'inventories.kodeAlat',
                                'nama_alat.nama_alat',
                                'perawatan_alat.id_perawatan',
                                'perawatan_alat.jenis_perawatan',
                                'perawatan_alat.status_perawatan',
                                'perawatan_alat.tanggal_perawatan',
                                'perawatan_alat.riwayat_perawatan',
                                'perawatan_alat.catatan_perawatan',
                            )->get();
        $penjadwalan_ruangan = DB::table('penjadwalan_ruangans')
                            ->join('rooms', 'penjadwalan_ruangans.kodeRuangan', '=', 'rooms.kodeRuangan')
                            ->join('lokasi', 'rooms.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                            ->select(
                                'rooms.namaRuangan',
                                'rooms.lokasiRuangan',
                                'rooms.kodeRuangan',
                                'lokasi.nama_gedung',
                                'lokasi.lantai',
                                'penjadwalan_ruangans.statusRuangan',
                                'penjadwalan_ruangans.namaPeminjam',
                                'penjadwalan_ruangans.id_penjadwalan',
                                'penjadwalan_ruangans.tanggalMasuk',
                                'penjadwalan_ruangans.tanggalKeluar',
                            )->get();
        $perawatan_ruangan = DB::table('perawatan_ruangans')
                            ->join('rooms', 'perawatan_ruangans.kodeRuangan', '=', 'rooms.kodeRuangan')
                            ->join('lokasi', 'rooms.lokasiRuangan', '=', 'lokasi.kode_lokasi')
                            ->select(
                                'rooms.kodeRuangan',
                                'rooms.namaRuangan',
                                'lokasi.nama_gedung',
                                'lokasi.lantai',
                                'perawatan_ruangans.id_perawatan',
                                'perawatan_ruangans.statusPerawatan',
                                'perawatan_ruangans.history',
                                'perawatan_ruangans.kondisi',
                            )->get();
        $inventory = Inventory::all();
        $room = Room::all();

        return view('dashboard', compact('totalAlat', 'totalRuangan', 'totalPeminjamanAlat', 'todayPeminjamanAlat', 'totalPenjadwalanRuangan', 'todayPenjadwalanRuangan','userLevel','pembelian','peminjaman_alat','perawatan_alat','penjadwalan_ruangan','perawatan_ruangan','inventory','room'));

         // Fetch the orders data from the database

        // return view('dashboard', ['pembelian' => $pembelian]);
    }

}
