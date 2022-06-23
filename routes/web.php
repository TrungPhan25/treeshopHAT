<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\User\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\CartController;


Route::get('admin/user/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/user/login/store',[LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('categories')->group(function () {
            Route::get('add', [CategoriesController::class, 'create']);
            Route::post('add',[CategoriesController::class,'store']);
            Route::get('list',[CategoriesController::class,'index']);
            Route::get('edit/{category}',[CategoriesController::class,'show']);
            Route::post('edit/{category}',[CategoriesController::class,'update']);
            Route::DELETE('destroy/{category}',[CategoriesController::class,'destroy'])->name('categoryDestroy');
        });
        #Product
        Route::prefix('products')->group(function (){

            Route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::get('edit/{product}',[ProductController::class,'show']);
            Route::post('edit/{product}',[ProductController::class,'update']);
            Route::DELETE('destroy/{product}',[ProductController::class,'destroy']);
        });
        #Slider
        Route::prefix('sliders')->group(function (){
            Route::get('add',[SliderController::class,'create']);
            Route::post('add',[SliderController::class,'store']);
            Route::get('list',[SliderController::class,'index']);
            Route::get('edit/{slider}',[SliderController::class,'show']);
            Route::post('edit/{slider}',[SliderController::class,'update']);
            Route::DELETE('destroy/{slider}',[SliderController::class,'destroy']);
        });
        #Upload
        Route::post('uploads/uploadService',[UploadController::class,'store']);

        #Cart
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
        Route::post('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'update']);
    });
});


Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/search', [App\Http\Controllers\MainController::class, 'search']);

Route::post('/services/load-product',[App\Http\Controllers\MainController::class, 'loadProduct']);
Route::get('/danh-muc/{id}-{slug}.html', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/san-pham/{id}-{slug}.html', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/categorys', [
    \App\Http\Controllers\MainController::class,
    'Categorys',
])->name('Categorys');
#CART
Route::post('/add-cart', [ CartController::class,'index']);
Route::get('/carts', [ CartController::class,'show']);
Route::post('update-cart', [ CartController::class,'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('/carts', [ CartController::class,'addCart']);

#cmt


