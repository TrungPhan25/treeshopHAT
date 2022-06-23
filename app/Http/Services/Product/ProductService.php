<?php

namespace App\Http\Services\Product;

use App\Models\Product;


class ProductService
{
    const LIMIT =12;

    public function get($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar')
            ->orderByDesc('id')
            ->when ($page != null, function ($query) use ($page){
                $query->offset($page * self::LIMIT);
            })->paginate(self::LIMIT);
    }
    public function getfour($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar','updated_at')
            ->orderByDesc('id')
            ->when ($page != null, function ($query) use ($page){
                $query->offset($page * self::LIMIT);
            })
            ->limit(4)
            ->get();
    }
    public function geteight($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar','updated_at')
 ->orderBy('id','desc')
            ->limit(8)
            ->get();
    }
    public function gettwe($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar','updated_at')
            ->orderByDesc('id')
            ->when ($page != null, function ($query) use ($page){
                $query->offset($page * self::LIMIT);
            })
            ->limit(12)
            ->get();
    }
    public function getsixteen($page =null){
        return Product::query()->select('id','name','price','price_sale','avatar','updated_at')
            ->orderByDesc('id')
            ->when ($page != null, function ($query) use ($page){
                $query->offset($page * self::LIMIT);
            })
            ->limit(16)
            ->get();
    }
    public function getID($page =null){
        return Product::select('id','name','price','price_sale','avatar','category_id','updated_at')
            ->where('category_id',2)
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
        return Product::select('id','name','price','price_sale','avatar','updated_at')
            ->where('status',1)
            ->where('id','!=',$id)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
}
