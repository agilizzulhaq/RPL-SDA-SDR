<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerawatanAlat extends Model
{
    use HasFactory;

    protected $table="perawatan_alat";
    protected $primaryKey = 'kode_alat';
    protected $fillable = ['kode_alat', 'id_admin', 'id_keeper', 'id_user', 'nama_alat', 'lokasi_alat','jenis_perawatan','status_perawatan','riwayat_perawatan', 'catatan_perawatan'];
}
