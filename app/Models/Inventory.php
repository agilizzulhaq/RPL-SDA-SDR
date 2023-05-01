<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function allData()
    {
        return DB::table('inventories')
            ->join('nama_alat', 'inventories.namaAlat', '=', 'nama_alat.kode_nama_alat')
            ->join('lokasi', 'inventories.lokasiAlat', '=', 'lokasi.kode_lokasi')
            ->select('inventories.id','inventories.kodeAlat', 'nama_alat.nama_alat as namaAlat', 'lokasi.nama_gedung as lokasiAlat', 'inventories.stok', 'inventories.limit', 'inventories.jenisAlat', 'inventories.pemakaianAlat', 'inventories.kondisiAlat', 'inventories.statusAlat')
            ->get();
    }
}

//concat(lokasi.nama_gedung, ' ', lokasi.lantai) as lokasiAlat")