<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hama extends Model
{
    use HasFactory;

    public $table = "hamas";

    protected $fillable = [
        'name',
        'detail',
        'pestisida',
        'image',
    ];
}
