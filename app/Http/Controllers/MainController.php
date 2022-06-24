<?php

namespace App\Http\Controllers;

use App\Http\Services\Slider\SliderService;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductService;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\Product;


class MainController extends Controller
{
    const LIMIT = 12;
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
            'title'=>'Shop bán cây cảnh',
            'sliders'=>$this->slider->show(),
            'categories'=>$this->category->show(),
            'products'=>$this->product->geteight(),
            'productsID' => $this->product->getID()
        ]);
    }
    public function search(Request $request){
        $result = $request->result;
        $keyword = $result;
        $categories = categories::where('list_id',0)->get();
        $products = Product::latest()->take(4)->get();
        $result = str_replace('','%',$result);
        $items = Product::query()->where('name','like','%'.$result.'%')->paginate(self::LIMIT);
        return view('search',[
            'title'=>'Sản phẩm',
            'items'=>$items->appends($request->except('page')),
        ],compact('products','categories','keyword' ));
    }
    public function Categorys(Request $request)
    {
        $products = $this->category->getProductall($request);
        return view('categorys', [
            'title' => 'Tất cả sản phẩm',
            'sliders' => $this->slider->show(),
            'categories' => $this->category->show(),
            'products' =>$products,
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
    public function profile(){
        return view('profile',[
            'title'=>'Shop bán cây cảnh',
            'sliders'=>$this->slider->show(),
            'categories'=>$this->category->show(),
            'products'=>$this->product->geteight(),
            'productsID' => $this->product->getID()
        ]);
    }
}
