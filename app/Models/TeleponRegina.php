<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeleponRegina extends Model
{
    use HasFactory;

    protected $table="telepon_regina_060623";
    protected $fillable = [
        'mahasiswa', 'telepon'
    ];

    public static function join(){
        $data = DB::table('telepon_regina_060623')
            ->join('mahasiswa_regina_060623', 'telepon_regina_060623.mahasiswa', 'mahasiswa_regina_060623.id')
            ->select('telepon_regina_060623.*', 'mahasiswa_regina_060623.nama');
        return $data;
    }
}
