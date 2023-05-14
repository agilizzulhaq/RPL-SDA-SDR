<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembelian extends Model
{
    protected $fillable = [
        'id_pembelian', 'nama_alat', 'tanggal_pembelian', 'vendor', 'harga_satuan', 'jumlah_pembelian', 'keterangan', 'status'
    ];

    //protected $guarded = [];
    
    use HasFactory;

    public function NamaAlat(): BelongsTo
    {
        return $this->belongsTo(NamaAlat::class, 'nama_alat', 'kode_nama_alat');
    }

    public function Vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor', 'id_vendor');
    }
}
