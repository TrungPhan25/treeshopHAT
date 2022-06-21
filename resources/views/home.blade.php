@extends('main')

@section('content')



    <div class="container">
        <div class="row">

            <h1 class="hidden">Ant Green blogger theme</h1>
            <section class='awe-section-1'>
                <div class='section' id='top-sliders' maxwidgets='1' name='Slide ảnh' showaddelement='yes'>
                    <div class='widget' id='HTML1' locked='false' title='' type='HTML'>
                        <div class='widget-settings'>
                            <div class='widget-setting' name='content'>
                                <div class='margin-top-15 top-sliders col-md-12'>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <!-- Slideshow container -->
                                        <div class="slideshow-container">

                                            <!-- Full-width images with number and caption text -->
                                            @foreach($sliders as $slider)
                                                <div class="mySlider fadee">

                                                    <img src="{{ $slider->avatar }}" style="width:100%">

                                                </div>
                                        @endforeach


                                        <!-- Next and previous buttons -->
                                            <a class="prevv" onclick="plusSlides(-1)">&#10094;</a>
                                            <a class="nextt" onclick="plusSlides(1)">&#10095;</a>
                                        </div>
                                        <br>

                                        <!-- The dots/circles -->
                                        <div style="text-align:center">
                                            <span class="dot" onclick="currentSlide(1)"></span>
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                            <span class="dot" onclick="currentSlide(3)"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class='includable' id='main'>
                                <!-- only display title if it's non-empty -->
                                <div if cond='data:title != "'>
                                    <h2 class='title'><data:title/></h2>
                                </div>
                                <div class='widget-content'>
                                    <data:content/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </section>
            <div class="clearfix"></div>
            <section class="awe-section-2">
                <div class="section_banner clearfix">
                    <div class="section" id="section_banner" name="Banner 3 ảnh">
                        <div class="widget HTML" data-version="1" id="HTML2">
                            <div class="widget-content">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-banner">
                                        <a class="box-img" href="/search/label/all" title="Mùa Tết">
                                            <img
                                                alt="Mùa Tết"
                                                class="img-responsive center-block"
                                                src={{URL::asset('template/images/index_1.jpg')}}
                                            />
                                            <div class="banner-content">
                                                <div class="fix-banner-content">
                                                    <div class="banner-title">Mùa Tết</div>
                                                    <div class="banner-subtitle">Giảm giá</div>
                                                    <div class="percent-sale">
                                                        đến 50
                                                        <span class="percent"> % </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-banner">
                                        <a
                                            class="box-img"
                                            href="/search/label/san-pham"
                                            title="Đón tết"
                                        >
                                            <img
                                                alt="Đón tết"
                                                class="img-responsive center-block"
                                                src={{URL::asset('template/images/index_2.jpg')}}
                                            />
                                            <div class="banner-content">
                                                <div class="fix-banner-content custom-position">
                                                    <div class="banner-title">Đón tết</div>
                                                    <div class="banner-subtitle">Tân trang nhà cửa</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-banner">
                                        <a
                                            class="box-img"
                                            href="/search/label/san-pham"
                                            title="Flash Sale"
                                        >
                                            <img
                                                alt="Flash Sale"
                                                class="img-responsive center-block"
                                                src={{URL::asset('template/images/index_3.jpg')}}
                                            />
                                            <div class="banner-content">
                                                <div class="fix-banner-content custom-position2">
                                                    <div class="banner-title">Flash Sale</div>
                                                    <div class="percent-sale">
                                                        50
                                                        <span class="percent"> % </span>
                                                    </div>
                                                    <div class="banner-subtitle">Cửa hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class='awe-section-3'>
                <div class='section_flash_sale clearfix'>
                    <div class='col-md-12'>
                        <div class='section' id='products' name='Sản phẩm Slide' showaddelement='yes'>
                            <div class='widget' id='HTML3' locked='false' title='' type='HTML'>
                                <div class='widget-settings'>

                                    <div class='widget-setting' name='content'>
                                        <div class='flash-sale-title margin-bottom-30'>
                                            <a href='san-pham-moi' title='Sản phẩm mới'>
                                                Sản phẩm mới
                                            </a>

                                        </div>
                                    </div>

                                    <ul id="hot">
                                        <li>
                                            <div class="row">



                                                @foreach($products as $key =>$product)
                                                    <div class="owl-item col-md-3">
                                                        <div class = "simpleCart_shelfItem">
                                                            <div class="ant-single-product">
                                                                <div class="ant-single-product-image">
                                                                    <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                                        <img src="{{ $product->avatar }}" alt="{{ $product->name }}'" class="img-responsive center-block item_thumb" /></a>
                                                                    <span class="discount-label discount-label--green">-6%</span>
                                                                    <form action="" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                                        <a class="button ajax_addtocart add_to_cart item_add " onclick="" href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" title="Mua ngay"
                                                                        ></a>

                                                                        <a class="add-to-cart quick-view quickview" href="'+t+'" title="Xem nhanh"></a>
                                                                    </form>
                                                                </div>
                                                                <div class="ant-product-border">
                                                                    <h3 class="product-title">
                                                                        <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"> {{$product->name}}</a>
                                                                        <p style = "display:none;" class = "item_name">  </p>
                                                                    </h3>
                                                                    <div class="product-price">
                                                                        <span class="price item_price">{{$product->price}} VNĐ</span>
                                                                        <span class="price-before-discount">{{$product->price}} VNĐ</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>

                                        </li>


                                        <li>
                                            <div class="row">
                                                @foreach($products as $key =>$product)
                                                    <div class="owl-item col-md-3">
                                                        <div class = "simpleCart_shelfItem">
                                                            <div class="ant-single-product">
                                                                <div class="ant-single-product-image">
                                                                    <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"><img src="{{ $product->avatar }}" alt="{{ $product->name }}'"class="img-responsive center-block item_thumb" /></a>
                                                                    <span class="discount-label discount-label--green">-6%</span>
                                                                    <form action="javascript:void(0);" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                                        <a class="button ajax_addtocart add_to_cart item_add" href="javascript:void(0);" title="Mua ngay"></a>
                                                                        <a class="add-to-cart quick-view quickview" href="'+t+'" title="Xem nhanh"></a>
                                                                    </form>
                                                                </div>
                                                                <div class="ant-product-border">
                                                                    <h3 class="product-title">
                                                                        <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"> {{$product->name}}</a>
                                                                        <p style = "display:none;" class = "item_name">  </p>
                                                                    </h3>
                                                                    <div class="product-price">
                                                                        <span class="price item_price">{{$product->price}} VNĐ</span>
                                                                        <span class="price-before-discount">{{$product->price}} VNĐ</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
            </section>
            <div class="clearfix"></div>
            <section class="awe-section-4">
                <div class="section_about_us clearfix">
                    <div class="rows">
                        <div class="section" id="about_us" name="Giới thiệu">
                            <div class="widget HTML" data-version="1" id="HTML4">
                                <div class="widget-content">
                                    <div class="col-md-5 no-padding col-trai">
                                        <div class="abount-content">
                                            <h3>Top Cây Cảnh</h3>
                                            <h4>hợp phong thủy!</h4>
                                            <p>
                                                Hãy đi tìm loài cây mang lại tài lộc, may mắn cho gia
                                                chủ trong năm 2022
                                            </p>
                                            <a href="/search/label/san-pham" title="Khám phá ngay">
                                                Khám phá ngay
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 no-padding col-phai">
                                        <div class="about-image">
                                            <a href="/search/label/san-pham" title="Ant Green">
                                                <img
                                                    alt="Ant Green"
                                                    class="img-responsive center-block"
                                                    src={{URL::asset('template/images/index_4.jpg')}}
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="awe-section-5">
                <div class="section_product section_product-1 clearfix">
                    <div class="col-md-12">
                        <div class="section" id="section_product-1" name="Sản phẩm All">
                            <div class="widget HTML" data-version="1" id="HTML5">
                                <div class="widget-content">
                                    <div class="section-head clearfix">
                                        <h2 class="title_blog">
                                            <a href="san-pham-moi" title="Tiểu cảnh để bàn">
                                                Tiểu cảnh để bàn
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-3 col-xs-12 fix-40">
                                            <a class="box-img" href="#" title="Ant Green">
                                                <picture>
                                                    <img
                                                        alt="Ant Green"
                                                        class="img-responsive center-block"
                                                        src={{URL::asset('template/images/medium_1.jpg')}}
                                                    />
                                                </picture>
                                            </a>
                                        </div>

                                        <script src="/feeds/posts/default/-/san-pham?max-results=8&amp;orderby=published&amp;alt=json-in-script&amp;callback=labelproductall"></script>

                                        @foreach($productsID as $product)
                                            <div class="col-md-15 col-sm-3 col-xs-6">
                                                <div class="ant-single-product simpleCart_shelfItem">
                                                    <div class="ant-single-product-image">
                                                        <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                            <img
                                                                src="{{ $product->avatar }}"
                                                                alt="{{ $product->name }}"
                                                                class="img-responsive center-block item_thumb"
                                                            /></a>
                                                        <span class="discount-label discount-label--green"
                                                        >-31%</span
                                                        >
                                                        <form
                                                            class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart"
                                                        >
                                                            <a
                                                                class="button ajax_addtocart add_to_cart item_add"
                                                                href="javascript:void(0);"
                                                                title="Mua ngay"
                                                                id="s11"
                                                            ></a>
                                                            <a
                                                                class="add-to-cart quick-view quickview"
                                                                href="https://ant-green-ht.blogspot.com/2019/12/cay-co-nhat-b.html"
                                                                title="Xem nhanh"
                                                            ></a>
                                                        </form>
                                                    </div>
                                                    <div class="ant-product-border">
                                                        <h3 class="product-title">
                                                            <a
                                                                href="https://ant-green-ht.blogspot.com/2019/12/cay-co-nhat-b.html"
                                                                title="Cây Cọ Nhật B"
                                                            >{{$product->name}}</a
                                                            >

                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price item_price">{{$product->price}} VNĐ</span>
                                                            <span class="price-before-discount">{{$product->price}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="awe-section-9">
                <div class="section_policy clearfix">
                    <div class="col-md-12">
                        <div class="section" id="section_policy" name="Chính sách">
                            <div class="widget HTML" data-version="1" id="HTML6">
                                <div class="widget-content">
                                    <div
                                        class="owl-policy-mobile owl-carousel not-dqowl owl-loaded owl-drag"
                                    >
                                        <div class="owl-stage-outer">
                                            <div
                                                class="owl-stage"

                                            >
                                                <div class="owl-item " style="width: 237.5px">
                                                    <div class="item section_policy_content">
                                                        <a href="#" title="Miễn phí vận chuyển">
                                                            <img
                                                                alt="Miễn phí vận chuyển"
                                                                src={{URL::asset('template/images/ic1.png')}}
                                                            />
                                                            <div class="section-policy-padding">
                                                                <h3>Miễn phí vận chuyển</h3>
                                                                <div class="section_policy_title">
                                                                    Cho các đơn hàng > 500K
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item " style="width: 237.5px">
                                                    <div class="item section_policy_content">
                                                        <a href="#" title="Hỗ trợ 24/7">
                                                            <img
                                                                alt="Hỗ trợ 24/7"
                                                                src={{URL::asset('template/images/ic2.png')}}
                                                            />
                                                            <div class="section-policy-padding">
                                                                <h3>Hỗ trợ 24/7</h3>
                                                                <div class="section_policy_title">
                                                                    Liên hệ hỗ trợ 24h/ngày
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item " style="width: 237.5px">
                                                    <div class="item section_policy_content">
                                                        <a href="#" title="Hoàn tiền 100%">
                                                            <img
                                                                alt="Hoàn tiền 100%"
                                                                src={{URL::asset('template/images/ic3.png')}}
                                                            />
                                                            <div class="section-policy-padding">
                                                                <h3>Hoàn tiền 100%</h3>
                                                                <div class="section_policy_title">
                                                                    Nếu sản phẩm bị lỗi, hư hỏng
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item " style="width: 237.5px">
                                                    <div class="item section_policy_content">
                                                        <a href="#" title="Thanh toán">
                                                            <img
                                                                alt="Thanh toán"
                                                                src={{URL::asset('template/images/ic4.png')}}
                                                            />
                                                            <div class="section-policy-padding">
                                                                <h3>Thanh toán</h3>
                                                                <div class="section_policy_title">
                                                                    Được bảo mật 100%
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <div class="owl-prev">prev</div>
                                            <div class="owl-next">next</div>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="awe-section-10">
                <div class="section_category clearfix">
                    <div class="col-md-12">
                        <div class="section" id="section_category" name="Danh mục Image">
                            <div class="widget HTML" data-version="1" id="HTML7">
                                <div class="widget-content">
                                    <div class="flash-sale-title">Danh mục nổi bật</div>
                                    <div class="products products-view-grid">
                                        <div class="item col-md-3 col-sm-3 col-xs-6">
                                            <a
                                                href="/search/label/tieu-canh-de-ban"
                                                title="Tiểu Cảnh Để Bàn"
                                            >
                                                <img
                                                    alt="Tiểu Cảnh Để Bàn"
                                                    class="img-responsive center-block"
                                                    src="https://lh4.googleusercontent.com/-16MS-MbCgx8/XPcsyTh1qrI/AAAAAAAAIuQ/f6We2zwEn3ohZVWnsXMPA7b3mwT55mlGwCLcBGAs/s1600/optimized-gsiq.jpg"
                                                />
                                                <div class="category-content">
                                                    <h5>Tiểu Cảnh Để Bàn</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="item col-md-3 col-sm-3 col-xs-6">
                                            <a
                                                href="/search/label/chau-canh-de-ban"
                                                title="Chậu Cảnh Để Bàn"
                                            >
                                                <img
                                                    alt="Chậu Cảnh Để Bàn"
                                                    class="img-responsive center-block"
                                                    src="https://lh4.googleusercontent.com/-sr_sPPDg4_M/XPcvz47Bo7I/AAAAAAAAIvE/omXguOdNpa4bz1Ck5UTP4uw5dWPDvS4FwCLcBGAs/s1600/optimized-c856.jpg"
                                                />
                                                <div class="category-content">
                                                    <h5>Chậu Cảnh Để Bàn</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="item col-md-3 col-sm-3 col-xs-6">
                                            <a
                                                href="/search/label/cay-canh-mini"
                                                title="Cây Cảnh Mini"
                                            >
                                                <img
                                                    alt="Cây Cảnh Mini"
                                                    class="img-responsive center-block"
                                                    src="https://lh4.googleusercontent.com/-ezJYmmIiiEY/XPcvL5XuqFI/AAAAAAAAIu0/AYjoKjvhJfQs-bu_QBLgy_RIdRs2aIhJACLcBGAs/s1600/optimized-uo6j.jpg"
                                                />
                                                <div class="category-content">
                                                    <h5>Cây Cảnh Mini</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="item col-md-3 col-sm-3 col-xs-6">
                                            <a
                                                href="/search/label/phu-kien-trang-tri"
                                                title="Phụ Kiện Trang Trí"
                                            >
                                                <img
                                                    alt="Phụ Kiện Trang Trí"
                                                    class="img-responsive center-block"
                                                    src="https://lh4.googleusercontent.com/-KFZBcmdgL6g/XPcttOcHKfI/AAAAAAAAIug/j9R4y1xaL3kF-5SGQGxYnaAFM3F0t6L_ACLcBGAs/s1600/compressed-jp4v.jpg"
                                                />
                                                <div class="category-content">
                                                    <h5>Phụ Kiện Trang Trí</h5>
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
            </section>
            <div class="clearfix"></div>

        </div>
    </div>
@endsection
