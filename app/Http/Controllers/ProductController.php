<?php

namespace App\Http\Controllers;

use App\Http\Services\Category\CategoryService;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $category;

    protected $productService;
    public function __construct(ProductService $productService, CategoryService $category){
        $this->productService=$productService;
        $this->category = $category;

    }


    public function index($id='',$slug='')
    {
        $product=$this->productService->show($id);
        $productsMore=$this->productService->more($id);
        return view ('detail',[
            'title'=>$product->name,
            'product'=>$product,
            'products'=>$productsMore,
            'categories' => $this->category->show(),

        ]);

    }
}
