<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AlamatRegina extends Model
{
    use HasFactory;

    protected $table="alamat_regina_060623";
    protected $fillable = [
        'mahasiswa', 'alamat'
    ];

    public static function join(){
        $data = DB::table('alamat_regina_060623')
            ->join('mahasiswa_regina_060623', 'alamat_regina_060623.mahasiswa', 'mahasiswa_regina_060623.id')
            ->select('alamat_regina_060623.*', 'mahasiswa_regina_060623.nama');
        return $data;
    }
}
