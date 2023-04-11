<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'tanggal_lahir', 'alamat', 'email',];
}
