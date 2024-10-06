<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;

    protected $casts = [
        'images' => 'array', // If using JSON
        // OR
        // 'image' => 'serialize', // If using serialized array
    ];
    
    public function colorsVariationsF()
    {
        return $this->hasMany(ColorsVariations::class); 
    }

    public function sizeVariationsF()
    {
        return $this->hasMany(sizeVariations::class); 
    }
    
    public function reviewsproductsf()
    {
        return $this->hasMany(reviewsProducts::class); 
    }
    
}
