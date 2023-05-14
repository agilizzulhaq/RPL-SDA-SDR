<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenjadwalanRuangan extends Model
{
    protected $table="penjadwalan_ruangans";
    public $incrementing = false;

    protected $primaryKey = 'id_penjadwalan';
    protected $fillable = ['id_penjadwalan', 'kodeRuangan', 'namaPeminjam', 'tanggalMasuk', 'tanggalKeluar', 'statusRuangan'];


    public function Room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'kodeRuangan', 'kodeRuangan');
    }
    public function Pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'namaPeminjam', 'id_user');
    }
    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasiRuangan', 'kode_lokasi');
    }
}
