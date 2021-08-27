<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ph extends Model
{
    public function musim()
    {
        return $this->belongsTo('App\Models\Musim');
    }

    public function recommends(){
        return $this->hasMany('App\Models\Recommend');
    }
}
