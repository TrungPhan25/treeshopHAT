<?php

namespace App\Http\Services\Category;

use App\Models\categories;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CategoryService
{
    public function getParent()
    {
        return categories::where('list_id',0)->get();
    }

    public function getAll(){
        return categories::orderbyDesc('id')->paginate(20);
    }

    public function show(){
        return categories::select('name','id','sub')
            ->where('list_id',0)

            -> orderbyDesc('id')->get();

    }
    public function create($request){
        try{
            categories::create([
                'list_id'=>(int)$request->input('list_id'),
                'name'=>(string)$request->input('name'),
                'sub'=>(string)$request->input('sub'),
                'status'=>(string)$request->input('status'),

            ]);
            Session::flash('success','Thêm thư mục thành công');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;

    }
    public function destroy($request){

        $id=(int) $request->input('id');

        $category = categories::where('id',$id)->first();
        if($category){
            return categories::where('id',$id)->orWhere('list_id',$id)->delete();
        }
        return false;
    }
    public function update($category,$request){

        if($request->input('list_id') != $category->id){
            $category->list_id=(int)$request->input('list_id');
        }
        $category->name=(string)$request->input('name');
        $category->sub=(string)$request->input('sub');
        $category->status=(string)$request->input('status');
        $category->save();
        Session::flash('success','Update thư mục thành công');
    }
        public function getId($id)
        {
            return categories::where('id', $id)->where('status', 1)->firstOrFail();
        }

        public function getProduct($category,$request){
            $query = $category->products()
                ->select('id', 'name', 'price', 'price_sale', 'avatar')
                ->where('status', 1);

            if ($request->input('price')) {
                $query->orderBy('price', $request->input('price'));
            }

            return $query
                ->orderByDesc('id')
                ->paginate(12)
                ->withQueryString();
        }
    public function getProductall($request){
        $query = Product::
            select('id', 'name', 'price', 'price_sale', 'avatar','updated_at')
            ->where('status', 1);

        if ($request->input('price')) {
            $query->orderBy('price', $request->input('price'));
        }

        return $query
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();
    }
}
