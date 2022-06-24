<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateFormRequest;
use App\Models\categories;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;

class CategoriesController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create()
    {
        return view('admin.category.add', [
            'title' => 'Thêm Danh Mục',
            'categories' => $this->categoryService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        $result = $this->categoryService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.category.list', [
            'title' => 'Danh Sách Danh Mục',
            'categories' => $this->categoryService->getAll()

        ]);
    }

    public function destroy(Request $request): JsonResponse
    {

        $result = $this->categoryService->destroy($request);
        if ($result) {
            // trả về cho thằng view
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function show(categories $category){

        return view('admin.category.edit',[
            'title'=>'Chỉnh sửa danh mục'.$category->name,
            'category'=> $category,
            'categories'=>$this->categoryService->getParent()
        ]);
    }
    public function update(categories $category, Request $request){


        $this->categoryService->update($category,$request);
        return redirect('admin/categories/list');
    }


}
