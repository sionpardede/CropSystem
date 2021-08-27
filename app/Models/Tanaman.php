<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Tanaman extends Model
{
    use HasFactory;

    public $table = "tanamans";

    protected $fillable = [
        'jenisTanaman',
        'kategori',
        'caraTanam',
        'video',
        'jenisPupuk',
        'sequence',
        'ph',
        'humidity',
        'temp',
        'rainfall',
        'land',
        'urea',
        'za',
        'sp36',
        'kcl',
        'npk',
        'dolomite',
        'zk',
        'organik',
        'kandang',
        'hijau',
        'kompos',
        'hayati',
        'humus'
    ];
}
