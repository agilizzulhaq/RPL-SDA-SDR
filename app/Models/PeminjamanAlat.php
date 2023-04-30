<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PeminjamanAlat extends Model
{
    use HasFactory;

    protected $table="peminjaman_alat";
    public $incrementing = false;

    protected $primaryKey = 'kode_alat';
    protected $fillable = ['kode_alat', 'nama_alat', 'nama_peminjam', 'tanggal_peminjam', 'status_peminjaman', 'alasan_peminjaman'];

    public function allData()
    {
        return DB::table('peminjaman_alat')
            ->join('nama_alat', 'peminjaman_alat.nama_alat', '=', 'nama_alat.kode_nama_alat')
            ->join('penggunas', 'peminjaman_alat.nama_peminjam', '=', 'penggunas.id_user')
            ->select('peminjaman_alat.kode_alat', 'nama_alat.nama_alat as nama_alat', 'penggunas.nama_user as nama_peminjam', 'peminjaman_alat.tanggal_peminjam', 'peminjaman_alat.status_peminjaman', 'peminjaman_alat.alasan_peminjaman')
            ->get();
    }
}
