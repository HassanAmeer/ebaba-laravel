<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviewsProducts extends Model
{
    protected $table = 'reviewsProducts';

    protected $fillable = ['products_id', 'showThis', 'userRating','userName','userPhoneOrEmail','userComment','userUploadedImage'];

    public function products()
    {
        return $this->belongsTo(products::class,'products_id'); // Make sure the relation points to the correct model name
    }
}
