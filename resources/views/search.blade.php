@extends('main')

@section('content')
    <div class=''>
        <div class="row">
            <section class='bread-crumb margin-bottom-30'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <ul class='breadcrumb' itemscope='' itemtype='http://schema.org/BreadcrumbList'>
                                <li class='home'>
                                    <a href='/' title='Trang chủ'>
                                        <span>Trang chủ > </span>
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

                                    @foreach($items as $item)
                                        <div class="owl-item col-md-3">
                                            <div class = "simpleCart_shelfItem">
                                                <div class="ant-single-product">
                                                    <div class="ant-single-product-image zoom_pic">
                                                        <a href="/treeshopHAT/public/san-pham/{{ $item->id }}-{{ Str::slug($item->name, '-') }}.html">
                                                            <img src="{{ $item->avatar }}" alt="{{ $item->name }}'" class="img-responsive center-block item_thumb" /></a>
                                                        @if(now()->diffInDays($item->updated_at) < 1)
                                                            <span class="discount-label discount-label--green">new</span>
                                                        @endif
                                                        <form action="javascript:void(0);" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                            <a class="button ajax_addtocart add_to_cart item_add" href="javascript:void(0);" title="Mua ngay"></a>
                                                            <a class="add-to-cart quick-view quickview" href="'+t+'" title="Xem nhanh"></a>
                                                        </form>
                                                    </div>
                                                    <div class="ant-product-border">
                                                        <h3 class="product-title">
                                                            <a href="/treeshopHAT/public/san-pham/{{ $item->id }}-{{ Str::slug($item->name, '-') }}.html" title="">{{$item->name}}</a>

                                                        </h3>
                                                        <div class="product-price">
                                                            @if($item->price_sale != 0 )
                                                                <span class="price item_price">{{$item->price_sale}} VNĐ</span>
                                                                <span class="price-before-discount">{{$item->price}} VNĐ</span>
                                                            @else
                                                                <span class="price item_price">{{$item->price}} VNĐ</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </section>
                            {{$items->links('paging')}}
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
                                                <li class="lis-ca">
                                                    <a class="link-ca" href="/treeshopHAT/public/danh-muc/{{ $category->id }}-{{ Str::slug($category->name, '-') }}.html"> <i class="fa fa-caret-right icon-ca"></i> {{$category->name}}</a>
                                                    <button class="dropdown-btn btn-ca ca-letf fa fa-angle-down"><i class=""></i>
                                                    </button>
                                                    <div class="dropdown-container">
                                                        @foreach($category-> categoryChilden as $categoryChilden)
                                                            <a href="/treeshopHAT/public/danh-muc/{{ $categoryChilden->id }}-{{ Str::slug($categoryChilden->name, '-') }}.html">
                                                                {{$categoryChilden->name}}</a>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </aside>



                    </aside>
                    <div class="left-content col-md-3 col-md-pull-9">
                        <div class="section" id="cot-trai" name="Sidebar Phải">
                            <div class="widget HTML" data-version="1" id="HTML9">
                                <div class="widget-content">
                                    <div class="module_service_details clearfix">
                                        <div class="item_service clearfix">
                                            <a href="#" title="Miễn phí vận chuyển">
                                                <img
                                                    alt="Miễn phí vận chuyển"
                                                    src="https://lh4.googleusercontent.com/-r2RhL8IXDBg/XPXFTenKnlI/AAAAAAAAIqQ/ryIXUnYf5RgLoMgMn4Pyd5j_DTLgDl-fACLcBGAs/s1600/policy_images_1.png"
                                                />
                                                <div class="service-content">
                                                    <p>Miễn phí vận chuyển</p>
                                                    <span>Cho các đơn hàng &gt; 5tr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item_service clearfix">
                                            <a href="#" title="Hỗ trợ 24/7">
                                                <img
                                                    alt="Hỗ trợ 24/7"
                                                    src="https://lh4.googleusercontent.com/-QcvG46zrqc4/XPXFtXQeqvI/AAAAAAAAIqk/kbki5uj9KGQhoHFRwnl6bGP-Cn610ZVWACLcBGAs/s1600/policy_images_4.png"
                                                />
                                                <div class="service-content">
                                                    <p>Hỗ trợ 24/7</p>
                                                    <span>Liên hệ hỗ trợ 24h/ngày</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item_service clearfix">
                                            <a href="#" title="Hoàn tiền 100%">
                                                <img
                                                    alt="Hoàn tiền 100%"
                                                    src="https://lh4.googleusercontent.com/-XRqhM2tC-4Q/XPXFa3Bd6zI/AAAAAAAAIqY/Z30_GU9UmJEH4WFYTCkhXiCDtvZzJhIUQCLcBGAs/s1600/policy_images_2.png"
                                                />
                                                <div class="service-content">
                                                    <p>Hoàn tiền 100%</p>
                                                    <span>Nếu sản phẩm bị lỗi, hư hỏng</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item_service clearfix">
                                            <a href="#" title="Thanh toán">
                                                <img
                                                    alt="Thanh toán"
                                                    src="https://lh4.googleusercontent.com/-RvQwJPz0knE/XPXFmbbfOiI/AAAAAAAAIqc/qRKoO6XIwuYHvM6LDWrtr2E_I7h4MB-9ACLcBGAs/s1600/policy_images_3.png"
                                                />
                                                <div class="service-content">
                                                    <p>Thanh toán</p>
                                                    <span>Được bảo mật 100%</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection
