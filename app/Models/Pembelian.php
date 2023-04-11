<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    // protected $fillable = [
    //     'kodeAlat', 'namaAlat', 'lokasi', 'kondisi', 'status'
    // ];

    protected $guarded = [];
    
    use HasFactory;
}
