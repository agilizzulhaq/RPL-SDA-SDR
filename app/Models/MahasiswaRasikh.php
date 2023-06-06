<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaRasikh extends Model
{
    protected $table = '_Mahasiswa_rasikh_khalil_pasha_060623';
    protected $guarded = [];
    
    use HasFactory;

    public function nilaimks(){
        return $this->belongsTo(MataKuliahRasikh::class);
    }
}
