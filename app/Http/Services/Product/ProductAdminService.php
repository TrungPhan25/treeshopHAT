<?php

namespace App\Http\Services\Product;
use App\Models\categories;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


class ProductAdminService
{
    public function getCategory()
    {
        return categories::where('status', 1)->get();
    }


        public function insert($request){

            $isValidPrice = $this->isValidPrice($request);
            if ($isValidPrice === false ) return false;

            try {
                $request->except('_token');
                Product::create($request->all(),[
                    'producer_id'=>'0'
                ]);
                Session::flash('success', 'Thêm Sản phẩm thành công');
            } catch (\Exception $err) {
                Session::flash('error', 'Thêm Sản phẩm lỗi');
                \Log::info($err->getMessage());
                return  false;
            }

            return  true;
        }

    private function isValidPrice($request)
    { if ($request->input('price') != 0 && $request->input('price_sale') != 0
        && $request->input('price_sale') >= $request->input('price')
    ) {
        Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
        return false;
    }

        if ($request->input('price_sale') != 0 && (int)$request->input('price') == 0) {
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }

        return  true;
    }
    public function get()
    {
        return Product:: with('category')->
        orderByDesc('id')->paginate(5);

    }
    public function update($request, $product)
    {
        $isValidQuantity = $this->isValidQuantity($request);

        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice === false && isValidQuantity === false) return false;

        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request)
    {
        $product = Product::where('id', $request->input('id'))->first();
        if ($product) {
            $product->delete();
            return true;
        }

        return false;
    }
}
