<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_alyzar';
    protected $primaryKey = 'idstudents';
    public $incrementing = false;
    public $timestamps = true;
}
