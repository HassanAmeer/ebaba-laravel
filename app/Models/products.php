<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;
    
    public function colorsVariationsF()
    {
        return $this->hasMany(ColorsVariations::class); 
    }

    public function sizeVariationsF()
    {
        return $this->hasMany(sizeVariations::class); 
    }
    
}
