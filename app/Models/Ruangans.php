<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangans extends Model
{

    use HasFactory;

    protected $table = 'ruangans';
    protected $primary = 'koderuangan';


    public $incrementing = false;
    public $timestamps = true;

}
