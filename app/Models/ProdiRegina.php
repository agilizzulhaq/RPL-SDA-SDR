<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiRegina extends Model
{
    use HasFactory;

    protected $table="prodi_regina_060623";
    protected $fillable = [
        'namaprodi'
    ];
}
