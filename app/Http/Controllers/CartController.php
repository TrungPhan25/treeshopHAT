<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;
use App\Http\Services\Category\CategoryService;

class CartController extends Controller
{
    protected $cartService;
    protected $category;

    public function __construct(CartService $cartService,CategoryService $category)
    {
        $this->cartService = $cartService;
        $this->category= $category;
    }

    public function index(Request $request)
    {

        $result = $this->cartService->create($request);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/carts');
    }

    public function show()
    {
        $products = $this->cartService->getProduct();
        // Session::forget('carts');
        return view('carts.list', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'categories'=>$this->category->show(),
            'carts' => Session::get('carts')
        ]);

    }

    public function update(Request $request)
    {
        $this->cartService->update($request);
        return redirect('/carts');
    }

    public function remove($id = 0)
    {
        $this->cartService->remove($id);
        return redirect('/carts');
    }

    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);

        return redirect()->back();
    }
}
