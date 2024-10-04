<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ColorsVariations extends Model
{
    protected $table = 'ColorsVariations';

    protected $fillable = ['products_id', 'productColorCode', 'productImage', 'productPrice'];

    public function product()
    {
        return $this->belongsTo(products::class,'products_id'); // Make sure the relation points to the correct model name
    }
}
