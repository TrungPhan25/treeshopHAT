@extends('main')

@section('content')
<div class='container'>
    <div class="row">
        <section class='bread-crumb margin-bottom-30'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <ul class='breadcrumb' itemscope='' itemtype='http://schema.org/BreadcrumbList'>
                            <li class='home'>
                                <a href='/' title='Trang chủ'>
                                    <span>Trang chủ</span>
                                </a>
                                <span>Tất cả sản phẩm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class='container'>
            <div class='row'>
                <section class='main_container collection col-md-9 col-md-push-3'>
                    <div class='category-products products category-products-grids list-blog-page'>
                        <div if cond='data:blog.searchLabel == &quot;san-pham&quot;'>
                            <div class='box-heading'>
                                <h1 class='title-head'>Tất cả sản phẩm</h1>
                            </div>

                        </div>
                        <section class='products-view products-view-grid list-blogs blog-main margin-top-30'>
                            <div class='row'>

                            @foreach($products as $key =>$product)
                                <div class="owl-item col-md-3">
                                    <div class = "simpleCart_shelfItem">
                                        <div class="ant-single-product">
                                            <div class="ant-single-product-image zoom_pic">
                                                <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                    <img src="{{ $product->avatar }}" alt="{{ $product->name }}'" class="img-responsive center-block item_thumb" /></a>
                                                <span class="discount-label discount-label--green">-6%</span>
                                                <form action="javascript:void(0);" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                    <a class="button ajax_addtocart add_to_cart item_add" href="javascript:void(0);" title="Mua ngay"></a>
                                                    <a class="add-to-cart quick-view quickview" href="'+t+'" title="Xem nhanh"></a>
                                                </form>
                                            </div>
                                            <div class="ant-product-border">
                                                <h3 class="product-title">
                                                    <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" title="">{{$product->name}}</a>

                                                </h3>
                                                <div class="product-price">
                                                    @if($product->price_sale != 0 )
                                                        <span class="price item_price">{{$product->price_sale}} VNĐ</span>
                                                        <span class="price-before-discount">{{$product->price}} VNĐ</span>
                                                    @else
                                                        <span class="price item_price">{{$product->price}} VNĐ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          @endforeach

                            </div>
                        </section>
                        {{$products->links('paging')}}
                    </div>

                </section>
                <aside class='ant-sidebar sidebar  left-content col-md-3 col-md-pull-9'>
                    <aside class='aside-item collection-category'>
                        <div class='aside-title'>
                            <h3 class='title-head margin-top-0'><span>Danh mục</span></h3>
                        </div>
                        <div class='aside-content'>
                            <nav class='nav-category navbar-toggleable-md'>
                                <div class="sidenav">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li>
                                            <button class="dropdown-btn">
                                            <i class="fa fa-caret-right"></i>  {{$category->name}}
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                @foreach($category-> categoryChilden as $categoryChilden)
                                                <a href="/search/label/{{$categoryChilden->name}}">
                                                    {{$categoryChilden->name}}
                                                    @endforeach</a>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </aside>


            </div>
        </div>
    </div>
</div>
@endsection
