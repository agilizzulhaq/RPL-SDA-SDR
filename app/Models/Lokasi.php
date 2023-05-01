<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table="lokasi";
    public $incrementing = false;

    protected $primaryKey = 'kode_lokasi';
    protected $fillable = ['kode_lokasi', 'nama_gedung', 'lantai'];
}
