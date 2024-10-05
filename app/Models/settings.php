<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class settings extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo(products::class,'products_id'); // Make sure the relation points to the correct model name
    }
}
