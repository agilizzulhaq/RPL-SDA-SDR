<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanAlat extends Model
{
    use HasFactory;

    protected $table="peminjaman_alat";
    public $incrementing = false;

    protected $primaryKey = 'kode_alat';
    protected $fillable = ['kode_alat', 'id_admin', 'id_user','nama_alat', 'nama_peminjam', 'tanggal_peminjam', 'status_peminjaman', 'alasan_peminjaman'];


}
