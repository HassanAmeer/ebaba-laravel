<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;

    protected $table = 'Orders';
    protected $fillable = ['productId','deliverd', 'isRejected', 'userName', 'userPhone', 'UserAddress','productTitle','productImage','productQuantity','productPrice','sizeVariations','colorVariations','ipAddress','freeItem'];
}
