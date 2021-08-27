<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public $table = "jadwals";

    protected $fillable = [
        'id_tanaman',
        'pembibitan',
        'penyemaian',
        'panen',
    ];
}
