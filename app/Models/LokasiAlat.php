<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiAlat extends Model
{
    use HasFactory;

    protected $table="lokasialat";
    public $incrementing = false;

    protected $primaryKey = 'kode_lokasi_alat';
    protected $fillable = ['kode_lokasi_alat', 'lokasi_alat'];
}
