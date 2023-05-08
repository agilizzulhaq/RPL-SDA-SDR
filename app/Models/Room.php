<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasiRuangan', 'kode_lokasi');
    }
}