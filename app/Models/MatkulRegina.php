<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulRegina extends Model
{
    use HasFactory;

    protected $table="matkul_regina_060623";
    protected $fillable = [
        'namamatkul'
    ];
}
