<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatLahirRegina extends Model
{
    use HasFactory;

    protected $table="tempatlahir_regina_060623";
    protected $fillable = [
        'kota'
    ];
}
