<?php

namespace App\Http\Controllers;

use App\Http\Services\Slider\SliderService;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $slider;
    protected $category;
    protected $product;

    public function __construct(SliderService $slider, CategoryService $category, ProductService  $product){
        $this->slider= $slider;
        $this->category= $category;
        $this->product=$product;
    }


    public function index(){
        return view('home',[
            'title'=>'Shop bán hoa HAT',
            'sliders'=>$this->slider->show(),
            'categories'=>$this->category->show(),
            'products'=>$this->product->get(),
            'productsID' => $this->product->getID()
        ]);
    }
    public function Categorys()
    {
        return view('categorys', [
            'title' => 'Tất cả sản phẩm',
            'sliders' => $this->slider->show(),
            'categories' => $this->category->show(),
            'products' => $this->product->get(),
            'productsID' => $this->product->getID(),
        ]);
    }
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result ])->render();

            return response()->json([ 'html' => $html ]);
        }

        return response()->json(['html' => '' ]);
    }

}
