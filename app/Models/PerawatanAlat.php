<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerawatanAlat extends Model
{
    use HasFactory;

    protected $table="perawatan_alat";
    protected $primaryKey = 'kode_alat';
    protected $fillable = ['kode_alat', 'nama_alat', 'lokasi_alat','jenis_perawatan','status_perawatan','riwayat_perawatan', 'catatan_perawatan'];

    public function namaAlat(): BelongsTo
    {
        return $this->belongsTo(NamaAlat::class, 'nama_alat', 'kode_nama_alat');
    }
}
