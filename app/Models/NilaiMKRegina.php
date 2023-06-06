<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NilaiMKRegina extends Model
{
    use HasFactory;

    protected $table="nilaimk_regina_060623";
    protected $fillable = [
        'mahasiswa', 'matkul', 'nilai'
    ];

    public static function join(){
        $data = DB::table('nilaimk_regina_060623')
            ->join('mahasiswa_regina_060623', 'nilaimk_regina_060623.mahasiswa', 'mahasiswa_regina_060623.id')
            ->join('matkul_regina_060623', 'nilaimk_regina_060623.matkul', 'matkul_regina_060623.id')
            ->select('nilaimk_regina_060623.*', 'mahasiswa_regina_060623.nama', 'matkul_regina_060623.namamatkul');
        return $data;
    }
}
