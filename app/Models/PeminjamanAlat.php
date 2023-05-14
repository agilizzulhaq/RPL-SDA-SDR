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

    protected $primaryKey = 'id_peminjaman';
    protected $fillable = ['id_peminjaman', 'kode_alat', 'nama_peminjam', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status_peminjaman', 'alasan_peminjaman'];

    public function Inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }
    public function NamaAlat(): BelongsTo
    {
        return $this->belongsTo(NamaAlat::class, 'nama_alat', 'kode_nama_alat');
    }
    public function Pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'nama_peminjam', 'id_user');
    }
}
