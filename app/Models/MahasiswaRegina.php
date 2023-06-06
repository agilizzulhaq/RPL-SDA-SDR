<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MahasiswaRegina extends Model
{
    use HasFactory;

    protected $table="mahasiswa_regina_060623";
    protected $fillable = [
        'nim', 'nama', 'prodi', 'jk', 'agama', 'nik', 'tempatlahir', 'tanggallahir'
    ];

    public static function join(){
        $data = DB::table('mahasiswa_regina_060623')
            ->join('prodi_regina_060623', 'mahasiswa_regina_060623.prodi', 'prodi_regina_060623.id')
            ->join('tempatlahir_regina_060623', 'mahasiswa_regina_060623.tempatlahir', 'tempatlahir_regina_060623.id')
            ->select('mahasiswa_regina_060623.*', 'prodi_regina_060623.namaprodi', 'tempatlahir_regina_060623.kota');
        return $data;
    }
}
