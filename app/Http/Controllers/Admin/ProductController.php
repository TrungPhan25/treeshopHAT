<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductAdminService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService=$productService;
    }

    public function index()
    {
        return view('admin.product.list',[
            'title'=>'Danh sách sản phẩm',
            'products'=>$this->productService->get(),
        ]);
    }


    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm Sản Phẩm Mới',
            'categories' => $this->productService->getCategory(),
        ]);
    }


    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);

        return redirect()->back();
    }


    public function show(Product $product)
    {
        return view('admin.product.edit',[
            'title' => 'Chỉnh Sửa Sản Phẩm',
            'product' => $product,
            'categories' => $this->productService->getCategory()
        ]);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request,Product $product)
    {
        $result = $this->productService->update($request, $product);
        if ($result) {
            return redirect('/admin/products/list');
        }

        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công sản phẩm'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}
