<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'avatar',
        'images',
        'detail',
        'producer_id',
        'quantity',
        'quantity_sold',
        'price',
        'status',
        'price_sale',
    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'id', 'category_id')
            ->withDefault(['name'=>'']);
    }
}
