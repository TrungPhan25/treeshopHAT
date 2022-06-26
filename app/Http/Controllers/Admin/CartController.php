<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Services\CartService;


class CartController extends Controller
{
    protected $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        //$customersStatus4=$this->cart->getCustomerStatus4();
        $statisticalPrice = Cart::query()
            ->groupBy('customer_id')->selectRaw('customer_id, sum(price) as sumPrice')
            ->rightJoin('customers', 'carts.customer_id', '=', 'customers.id')
            ->where('status', '=', '4')
            ->get()
            ->sum('sumPrice');

        $statisticalOrder= Customer::query()->where('status',4)->count();

        $statisticalWaitOrder=Customer::query()->where('status',2)->count();

        $statisticalNoOrder=Customer::query()->where('status',1)->count();


        return view('admin.carts.customer', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'customers' => $this->cart->getCustomer(),
            'statisticalPrice'=>$statisticalPrice,
            'statisticalOrder'=>$statisticalOrder,
            'statisticalWaitOrder'=>$statisticalWaitOrder,
            'statisticalNoOrder'=>$statisticalNoOrder
        ]);
    }

    public function show(Customer $customer)
    {
        $carts = $this->cart->getProductForCart($customer);

        return view('admin.carts.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts,
        ]);
    }

    public function update(Customer $customer, Request $request)
    {
        $result = $this->cart->updateStatus($customer, $request);
        if ($result) {
            return redirect('/admin/customers');
        }
    }
}
