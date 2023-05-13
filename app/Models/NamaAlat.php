<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaAlat extends Model
{
    use HasFactory;
    protected $table="nama_alat";
    public $incrementing = false;

    protected $primaryKey = 'kode_nama_alat';
    protected $fillable = ['kode_nama_alat', 'nama_alat', 'stok', 'limit', 'satuan', 'jenis_alat', 'pemakaian_alat'];
}
