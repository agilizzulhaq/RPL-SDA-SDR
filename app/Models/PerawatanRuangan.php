<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerawatanRuangan extends Model
{
    protected $table="perawatan_ruangans";
    public $incrementing = false;

    protected $primaryKey = 'id_perawatan';
    protected $fillable = ['id_perawatan', 'kodeRuangan', 'kondisi', 'history', 'statusPerawatan'];


    public function Room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'kodeRuangan', 'kodeRuangan');
    }

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasiRuangan', 'kode_lokasi');
    }
}
