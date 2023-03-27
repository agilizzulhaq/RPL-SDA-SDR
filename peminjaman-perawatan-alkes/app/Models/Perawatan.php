<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'kodealat';
    protected $fillable = ['kodealat', 'namaalat', 'lokasialat','jenisperawatan', 'catatanperawatan', 'tanggalperawatan'];
}
