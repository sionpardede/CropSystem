<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{

    use HasFactory;

    public $table = "recommends";

    protected $fillable = [
        'name',
        'ph',
        'musim',
        'isi',
    ];
}
