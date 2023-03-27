<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kodeAlat', 'namaAlat', 'lokasi', 'kondisi', 'status'
    ];
    
    use HasFactory;
}
