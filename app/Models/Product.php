<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getStock()
    {
        return $this->hasOne(StockProduct::class, 'product_id', 'id');
    }
}
