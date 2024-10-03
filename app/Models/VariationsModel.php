<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariationsModel extends Model
{
    use SoftDeletes; // If you want to use soft deletes

    protected $table = 'variationsF'; // Specify the table name

    protected $fillable = ['products_id', 'color_code', 'image', 'price'];

    public function product()
    {
        return $this->belongsTo(products::class, 'products_id'); // Make sure the relation points to the correct model name
    }
}




?>