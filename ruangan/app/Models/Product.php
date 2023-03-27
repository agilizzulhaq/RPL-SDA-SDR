<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kodeRuangan', 'jenisRuangan', 'namaRuangan', 'lokasi', 'status'
    ];
    
    use HasFactory;
}