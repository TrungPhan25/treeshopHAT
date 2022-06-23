<?php

namespace App\Http\Services\Product;

use App\Models\Product;


class ProductService
{
    const LIMIT =4;

    public function get($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar')
            ->orderByDesc('id')
            ->when ($page != null, function ($query) use ($page){
                $query->offset($page * self::LIMIT);
            })
            ->paginate(self::LIMIT);
    }
    public function getID($page =null){
        return Product::select('id','name','price','price_sale','avatar','category_id')
            ->where('category_id',1)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
    public function show($id)
    {
        return Product::where('id',$id)
            ->where('status',1)
            ->with('category')
            ->firstOrFail();
    }
    public function more($id){
        return Product::select('id','name','price','price_sale','avatar')
            ->where('status',1)
            ->where('id','!=',$id)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
}
