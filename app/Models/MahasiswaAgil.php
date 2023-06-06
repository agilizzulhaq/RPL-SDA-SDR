<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaAgil extends Model
{
    protected $table = 'mahasiswa_agil';
    protected $primaryKey='IDMahasiswa';
    protected $guarded=[];
    public $incrementing = false;
    public $timestamps=true;
    use HasFactory;
}