<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function nama_alat(): BelongsTo
    {
        return $this->belongsTo(NamaAlat::class, 'namaAlat', 'kode_nama_alat');
    }
}
