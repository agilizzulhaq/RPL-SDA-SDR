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
    protected $fillable = ['id_perawatan', 'kode_alat', 'jenis_perawatan','status_perawatan', 'tanggal_perawatan','riwayat_perawatan', 'catatan_perawatan'];

    public function Inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class, 'kode_alat', 'kodeAlat');
    }
}
