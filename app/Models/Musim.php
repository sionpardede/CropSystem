<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musim extends Model
{
    public function phs()
    {
        return $this->hasMany('App\Models\Ph'); // This musim has many ph
    }
}
