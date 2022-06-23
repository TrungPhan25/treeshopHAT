<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class categories extends Model
{
    use HasFactory;

    protected $fillable=[

        'list_id',
        'name',
        'sub',
        'status'
    ];

    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }

    public function categoryChilden(){
        return $this->hasMany(categories::class,'list_id');
    }


}
