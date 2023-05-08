<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PeminjamanAlat extends Model
{
    use HasFactory;

    protected $table="peminjaman_alat";
    public $incrementing = false;

    protected $primaryKey = 'kode_alat';
    protected $fillable = ['kode_alat', 'nama_alat', 'nama_peminjam', 'tanggal_peminjam', 'status_peminjaman', 'alasan_peminjaman'];

    public function namaAlat(): BelongsTo
    {
        return $this->belongsTo(NamaAlat::class, 'nama_alat', 'kode_nama_alat');
    }
}
