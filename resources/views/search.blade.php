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
                                    <h1 class='title-head'>Kết quả tìm kiếm cho từ khóa: {{$keyword}}</h1>
                                </div>

                            </div>
                            <section class='products-view products-view-grid list-blogs blog-main margin-top-30'>
                                <div class='row'>
                                    @foreach($items as $item)
                                        <div class="owl-item col-md-3">
                                            <div class = "simpleCart_shelfItem">
                                                <div class="ant-single-product">
                                                    <div class="ant-single-product-image">
                                                        <a href="/treeshopHAT/public/san-pham/{{ $item->id }}-{{ Str::slug($item->name, '-') }}.html"><img src="product_01.jpg" alt="'+r+'" class="img-responsive center-block item_thumb" /></a>
                                                        <span class="discount-label discount-label--green">-6%</span>
                                                        <form action="javascript:void(0);" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                            <a class="button ajax_addtocart add_to_cart item_add" href="javascript:void(0);" title="Mua ngay"></a>
                                                            <a class="add-to-cart quick-view quickview" href="'+t+'" title="Xem nhanh"></a>
                                                        </form>
                                                    </div>
                                                    <div class="ant-product-border">
                                                        <h3 class="product-title">
                                                            <a href="/treeshopHAT/public/san-pham/{{ $item->id }}-{{ Str::slug($item->name, '-') }}.html" title="'+r+'">{{$item->name}} </a>
                                                            <p style = "display:none;" class = "item_name"> Mã: '+g+" - "+r+' </p>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price item_price">{{$item->price}} </span>
                                                            <span class="price-before-discount">{{$item->price}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </section>
                            <div class="page">
                                <ul class="pagi">

                                    <li class="pagi-item">1</li>
                                    <li class="pagi-item is-active">2</li>
                                    <li class="pagi-item">3</li>
                                    <li class="pagi-item">4</li>
                                    <li class="pagi-item">5</li>

                                </ul>
                            </div>
                        </div>

                    </section>
                    <aside class='ant-sidebar sidebar  left-content col-md-3 col-md-pull-9'>
                        <aside class='aside-item collection-category'>
                            <div class='aside-title'>
                                <h3 class='title-head margin-top-0'><span>Danh mục</span></h3>
                            </div>
                            <div class='aside-content'>
                                <nav class='nav-category navbar-toggleable-md'>
                                    <ul class='nav navbar-pills'>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/tieu-canh-de-ban' title='Tiểu Cảnh Để Bàn'> Tiểu Cảnh Để Bàn</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/tieu-canh-terrarium' title='Tiểu Cảnh Terrarium'>Tiểu Cảnh Terrarium</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/chau-canh-de-ban' title='Chậu Cảnh Để Bàn'> Chậu Cảnh Để Bàn</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-trung-oasis' title='Chậu Trứng Oasis'>Chậu Trứng Oasis</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-phong-thuy' title='Cây Phong Thủy'>Cây Phong Thủy</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-canh-de-ban' title='Cây Cảnh Để Bàn'>Cây Cảnh Để Bàn</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/cay-canh-mini' title='Cây Cảnh Mini'> Cây Cảnh Mini</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-terrarium' title='Cây Terrarium'>Cây Terrarium</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-khong-khi' title='Cây Không Khí'>Cây Không Khí</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/phu-kien-trang-tri' title='Phụ Kiện Trang Trí'> Phụ Kiện Trang Trí</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/binh-thuy-tinh' title='Bình Thủy Tinh'>Bình Thủy Tinh</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/phu-kien-terrarium' title='Phụ Kiện Terrarium'>Phụ Kiện Terrarium</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/chau-trong-cay' title='Chậu trồng cây'> Chậu trồng cây</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-da-mai-trong-cay' title='Chậu đá mài trồng cây'>Chậu đá mài trồng cây</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-gom-su-trong-cay' title='Chậu gốm sứ trồng cây'>Chậu gốm sứ trồng cây</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-composite' title='Chậu Composite'>Chậu Composite</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-xi-mang' title='Chậu xi măng'>Chậu xi măng</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/chau-khay-nhua-trong-cay' title='Chậu, Khay nhựa trồng cây'>Chậu, Khay nhựa trồng cây</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/hoa-chau' title='Hoa chậu'> Hoa chậu</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/hoa-chau-treo' title='Hoa chậu treo'>Hoa chậu treo</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/hoa-tet' title='Hoa Tết'>Hoa Tết</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/hoa-tet-1' title='Hoa Tết'>Hoa Tết</a>
                                                </li>



                                            </ul>
                                        </li>
                                        <li class='nav-item '>
                                            <a class='nav-link' href='/cay-cong-trinh' title='Cây công trình'> Cây công trình</a>

                                            <ul class='dropdown-menu'>


                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-xanh-do-thi' title='Cây xanh đô thị'>Cây xanh đô thị</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-bong-mat' title='Cây bóng mát'>Cây bóng mát</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cay-la-mau' title='Cây lá màu'>Cây lá màu</a>
                                                </li>



                                                <li class='nav-item '>
                                                    <a class='nav-link' href='/cac-loai-co-canh' title='Các loại cỏ cảnh'>Các loại cỏ cảnh</a>
                                                </li>



                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </aside>
                        <div class='aside-item'>
                            <div class='heading'>
                                <h2 class='title-head'><a href='tin-tuc' title='Xem nhiều nhất'>Xem nhiều nhất</a></h2>
                            </div>
                            <div class='list-blogs'>

                            </div>
                            <div class='blogs-mores text-center'><a href='tin-tuc' title='Xem thêm'>Xem thêm</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
