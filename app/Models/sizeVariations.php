<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sizeVariations extends Model
{
    protected $table = 'sizeVariations';

    protected $fillable = ['products_id', 'productSize', 'productPrice'];

    public function product()
    {
        return $this->belongsTo(products::class,'products_id'); // Make sure the relation points to the correct model name
    }
}
