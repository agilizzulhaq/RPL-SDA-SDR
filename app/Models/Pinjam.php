<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $primaryKey = 'kodealat';
    protected $fillable = ['kodealat', 'namaalat', 'namapeminjam', 'tanggalpinjam'];
}
