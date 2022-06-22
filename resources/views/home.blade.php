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
                                                            <div class="ant-single-product-image zoom_pic">
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
{{--        <section class="awe-section-11">--}}
{{--            <section class="section-news clearfix">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section" id="section-news" name="Tin tức cây cảnh">--}}
{{--                        <div class="widget HTML" data-version="1" id="HTML8">--}}
{{--                            <div class="widget-content">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <h3 class="title_blog">--}}
{{--                                        <a href="/search/label/tin-tuc" title="Chăm sóc cây cảnh"--}}
{{--                                        >Chăm sóc cây cảnh</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <script src="/feeds/posts/default/-/tin-tuc?max-results=9&amp;orderby=published&amp;alt=json-in-script&amp;callback=labeltintuchoatran"></script>--}}
{{--                                    <div--}}
{{--                                        class="section-news-owl owl-carousel not-dqowl owl-loaded owl-drag"--}}
{{--                                    >--}}
{{--                                        <div class="owl-stage-outer">--}}
{{--                                            <div--}}
{{--                                                class="owl-stage"--}}
{{--                                                style="--}}
{{--                            transform: translate3d(0px, 0px, 0px);--}}
{{--                            transition: all 0s ease 0s;--}}
{{--                            width: 1575px;--}}
{{--                          "--}}
{{--                                            >--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2019/12/treo-bay-cac-vat-pham-may-man-cat-tuong.html"--}}
{{--                                                                title="Treo bày các vật phẩm may mắn cát tường bừa bãi"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-7yo6cxSS4WI/XPUNIyTeKoI/AAAAAAAAIoU/hlLnmgom3akooHwEkfxjV-Pbkr8eiCmWwCPcBGAYYCw/s1600/cach-nhan-giong-va-trong-cay-trau-ba.jpg"--}}
{{--                                                                        alt="Treo bày các vật phẩm may mắn cát tường bừa bãi"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Treo bày các vật phẩm may mắn cát tường--}}
{{--                                                                        bừa bãi...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 31/12/2019--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2019/06/nasa-cong-bo-cay-luoi-ho-co-tac-dung.html"--}}
{{--                                                                title="NASA đã công bố cây lưỡi hổ có tác dụng thanh lọc không khí rất tốt, chúng hấp thụ các chất gây ô nhiễm môi trường"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-wncRjL3_exE/XPdQ0NPisaI/AAAAAAAAIwE/z3ACIEwwiuk9sou3eMfPaWTt1_8NwJyhQCEwYBhgL/s1600/compressed-i2tp.jpg"--}}
{{--                                                                        alt="NASA đã công bố cây lưỡi hổ có tác dụng thanh lọc không khí rất tốt, chúng hấp thụ các chất gây ô nhiễm môi trường"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        NASA đã công bố cây lưỡi hổ có tác dụng--}}
{{--                                                                        thanh lọc không khí rất tốt, chúng hấp ...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 03/6/2019--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2019/06/7-loai-cay-cuoi-nam-nhat-inh-phai-mua-e.html"--}}
{{--                                                                title="7 loại cây cuối năm nhất định phải mua để giải trừ vận đen, kéo tài lộc vào nhà"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-srCa87Vr2-I/XPUUYS1qNiI/AAAAAAAAIpM/5yPFhtZ6ku0orcj88-FQ7vhNrJx6A6XlQCLcBGAs/s200/hoa-sen.jpg"--}}
{{--                                                                        alt="7 loại cây cuối năm nhất định phải mua để giải trừ vận đen, kéo tài lộc vào nhà"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        7 loại cây cuối năm nhất định phải mua để--}}
{{--                                                                        giải trừ vận đen, kéo tài lộc vào nhà...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 03/6/2019--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2019/06/6-thoi-xau-khien-ban-ngheo-quanh-nam-bo.html"--}}
{{--                                                                title="6 thói xấu khiến bạn nghèo quanh năm, bỏ ngay đi để Thần Tài gõ cửa"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-R_9a4b7S-RE/XPUT-wHyEpI/AAAAAAAAIpA/SpSsuy9EMn4EOGxUyiQJbb5JqL7AhTaHgCLcBGAs/s1600/sen-da-thai-4a.jpg"--}}
{{--                                                                        alt="6 thói xấu khiến bạn nghèo quanh năm, bỏ ngay đi để Thần Tài gõ cửa"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        6 thói xấu khiến bạn nghèo quanh năm, bỏ--}}
{{--                                                                        ngay đi để Thần Tài gõ cửa...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 03/6/2019--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2019/06/at-cay-luoi-ho-trong-phong-ngu-sang-i.html"--}}
{{--                                                                title="Đặt cây lưỡi hổ trong phòng ngủ, sáng đi làm gặp may chiều về nhà chồng 'cưng như trứng'"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-wB2z3WxZWaU/XPUTaWTKnmI/AAAAAAAAIo4/pevw7-K8MNkyvnPcYFUy7_GEinone7DjACLcBGAs/s1600/dat-cay-luoi-ho-trong-phong-ngu-sang-di-lam-gap-may-chieu-ve-nha-chong-cung-nhu-trung-1-1547201221-310-width600height450.jpg"--}}
{{--                                                                        alt="Đặt cây lưỡi hổ trong phòng ngủ, sáng đi làm gặp may chiều về nhà chồng 'cưng như trứng'"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Đặt cây lưỡi hổ trong phòng ngủ, sáng đi--}}
{{--                                                                        làm gặp may chiều về nhà chồng 'cưng n...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 03/6/2019--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-nav">--}}
{{--                                            <div class="owl-prev disabled">--}}
{{--                                                <i class="fa fa-angle-left" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="owl-next">--}}
{{--                                                <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-dots disabled"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clear"></div>--}}
{{--                            </div>--}}
{{--                            <div class="clear"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </section>--}}
{{--        <div class="clearfix"></div>--}}
{{--        <section class="awe-section-11">--}}
{{--            <section class="section-news clearfix">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section" id="section-video" name="Video cây cảnh">--}}
{{--                        <div class="widget HTML" data-version="1" id="HTML12">--}}
{{--                            <div class="widget-content">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <h3 class="title_blog">--}}
{{--                                        <a href="/search/label/tin-tuc" title="Chăm sóc cây cảnh"--}}
{{--                                        >Video cây cảnh</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <script src="/feeds/posts/default/-/video?max-results=9&amp;orderby=published&amp;alt=json-in-script&amp;callback=videos"></script>--}}
{{--                                    <div--}}
{{--                                        class="section-news-owl owl-carousel not-dqowl owl-loaded owl-drag"--}}
{{--                                    >--}}
{{--                                        <div class="owl-stage-outer">--}}
{{--                                            <div--}}
{{--                                                class="owl-stage"--}}
{{--                                                style="--}}
{{--                            transform: translate3d(0px, 0px, 0px);--}}
{{--                            transition: all 0s ease 0s;--}}
{{--                            width: 945px;--}}
{{--                          "--}}
{{--                                            >--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2020/05/video-tia-cay-canh-on-gian.html"--}}
{{--                                                                title="Video tỉa cây cảnh đơn giản"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-_Q-c8QoDJmE/XPXEe5hadPI/AAAAAAAAIqA/Xnzqjiw-C3M0w9dI7hdpKLRIvhPSeUZ-QCPcBGAYYCw/s320/index_sec_about_image-3.png"--}}
{{--                                                                        alt="Video tỉa cây cảnh đơn giản"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                    <div class="icon_play"></div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>Video tỉa cây cảnh đơn giản...</h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 15/5/2020--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2020/05/video-trung-bay-cac-vat-pham-may-man.html"--}}
{{--                                                                title="Video trưng bày các vật phẩm may mắn cát tường"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-WL23ccbSRFA/XPXEP-pHJ-I/AAAAAAAAIp4/sABbpwVfjFEDFtnZ6Y42hg3dSbIjfz0igCPcBGAYYCw/s320/index_sec_about_image-2.png"--}}
{{--                                                                        alt="Video trưng bày các vật phẩm may mắn cát tường"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                    <div class="icon_play"></div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Video trưng bày các vật phẩm may mắn cát--}}
{{--                                                                        tường...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 15/5/2020--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="owl-item active"--}}
{{--                                                    style="width: 300px; margin-right: 15px"--}}
{{--                                                >--}}
{{--                                                    <div class="hoatranweb">--}}
{{--                                                        <div class="post-inner clearfix">--}}
{{--                                                            <a--}}
{{--                                                                href="https://ant-green-ht.blogspot.com/2020/05/video-cham-soc-cay-canh-chuyen-nghiep.html"--}}
{{--                                                                title="Video chăm sóc cây cảnh chuyên nghiệp"--}}
{{--                                                            >--}}
{{--                                                                <div class="post_image">--}}
{{--                                                                    <img--}}
{{--                                                                        src="https://lh4.googleusercontent.com/-srCa87Vr2-I/XPUUYS1qNiI/AAAAAAAAIpQ/bDZyOyERmVAX9uq4pESgCz0AF8blH7bkgCPcBGAYYCw/s320/hoa-sen.jpg"--}}
{{--                                                                        alt="Video chăm sóc cây cảnh chuyên nghiệp"--}}
{{--                                                                        class="img-responsive center-block"--}}
{{--                                                                    />--}}
{{--                                                                    <div class="icon_play"></div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="border-news">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Video chăm sóc cây cảnh chuyên nghiệp...--}}
{{--                                                                    </h5>--}}
{{--                                                                    <div class="date_added">--}}
{{--                                                                        Ngày đăng: 15/5/2020--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-nav disabled">--}}
{{--                                            <div class="owl-prev disabled">--}}
{{--                                                <i class="fa fa-angle-left" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="owl-next disabled">--}}
{{--                                                <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-dots disabled"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clear"></div>--}}
{{--                            </div>--}}
{{--                            <div class="clear"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </section>--}}
{{--        <div class="clearfix"></div>--}}
{{--        <div class="container" id="hoatranweb">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 details-product">--}}
{{--                    <div class="col-md-9"></div>--}}
{{--                    <div class="col-md-3"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
