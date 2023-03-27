<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ware extends Model
{
    use HasFactory;
    protected $table = 'wares';
    protected $fillable = [
        'wareid',
        'namaware',
        'jabatanware',
    ];
}
