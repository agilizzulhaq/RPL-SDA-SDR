<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiRuangan extends Model
{
    use HasFactory;

    protected $table="lokasiruangan";
    public $incrementing = false;

    protected $primaryKey = 'kode_lokasi_ruangan';
    protected $fillable = ['kode_lokasi_ruangan', 'lokasi_ruangan'];
}
