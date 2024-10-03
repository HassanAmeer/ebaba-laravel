<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;
    
    public function variationsF()
    {
        return $this->hasMany(VariationsModel::class, 'products_id'); 
        
    }
    
}
