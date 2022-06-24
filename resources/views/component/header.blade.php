
<header class="header">
    <div class="container">
        <div class="row">
            <div class="top-link clearfix hidden-sm hidden-xs">
                <div class="col-md-6 col-xs-12 header-static">
                    <div class="social-title">Theo dõi:</div>
                    <a class="fb" href="#" target="_blank" title="Facebook"> </a>
                    <a class="tt" href="#" target="_blank" title="Twitter"> </a>
                    <a class="gp" href="#" target="_blank" title="Google Plus"> </a>
                    <a class="pin" href="#" target="_blank" title="Pinterest"> </a>
                </div>

            </div>
            <div class="header-main clearfix" id="navbar1">
                <div class="col-lg-3 col-md-3 col-100-h">
                    <button
                        class="navbar-toggle collapsed visible-sm visible-xs"
                        id="trigger-mobile"
                        type="button"
                    >
                        <span class="sr-only"> Toggle navigation </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <div class="logo">
                        <div class="section" id="logo" name="Logo ảnh">
                            <div class="widget HTML" data-version="1" id="HTML19">
                                <div class="widget-content">
                                    <a class="logo-wrapper" href="/treeshopHAT/public" title="Ant Green">
                                        <img
                                            alt="logo Ant Green"

                                            src={{URL::asset('template/images/logo.png')}}
                                        />
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-cart visible-sm visible-xs">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                         data-notify="{{    !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0  }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <form
                        action="{{asset('/search/')}}"
                        class="input-group search-bar search_form has-validation-callback"
                        method="get"
                        role="search"
                    >
                        <input
                            autocomplete="off"
                            class="input-group-field st-default-search-input search-text"
                            name="result"
                            placeholder="Tìm kiếm..."
                            type="text"
                            value=""
                        />
                        <span class="input-group-btn">
                <button class="btn icon-fallback-text">
                  <i class="fa fa-search"> </i>
                </button>
              </span>
                    </form>
                </div>


                <div class="col-lg-4 col-md-4 text-right hidden-sm hidden-xs clearfix">

                    <div class="items-cart-inner clearfix mini-cart">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                                 data-notify="{{    !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0  }}">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                    </div>

                    <div class="customer-support-text clearfix">
                        <img
                            alt="Hotline" src={{URL::asset('template/images/hotline_image.png')}}
                        />
                        <div class="textt text"><span> Hotline </span>
                            <a href="tel:0123456789"> 0123 456 789 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="nav" name="Thanh Menu">
        <div class="widget HTML" data-version="1" id="HTML18">
            <div class="widget-content">
                <nav class="hidden-sm hidden-xs">
                    <div class="container">
                        <ul class="nav" id="nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link trangchu trangchu1"
                                    href="/treeshopHAT/public"
                                    title="Trang chủ"
                                >
                                    Trang chủ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="/treeshopHAT/public/profile"
                                    title="Giới thiệu"
                                >
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="nav-item has-mega">
                                <a class="nav-link" href='./categorys'
                            title="Sản phẩm">
                                    Sản phẩm
                                    <i class="fa fa-angle-right" data-toggle="dropdown"> </i>
                                </a>
                                <div class="mega-content">
                                    <ul class="level0 col-md-9 no-padding">
                                        @foreach($categories as $category)
                                        <li class="level1 parent item">
                                            <a class="hmega" href="/treeshopHAT/public/danh-muc/{{ $category->id }}-{{ Str::slug($category->name, '-') }}.html">
                                               {{$category->name}}
                                            </a>
                                            <ul class="level1">
                                                <li class="level2">



                                                         @foreach($category-> categoryChilden as $categoryChilden)

                                                             <a href="/treeshopHAT/public/danh-muc/{{ $categoryChilden->id }}-{{ Str::slug($categoryChilden->name, '-') }}.html">{{$categoryChilden->name}}"</a>
                                                          @endforeach



                                                </li>
                                            </ul>
                                        </li>
                                        @endforeach


                                    </ul>
                                    <div class="col-md-3 no-padding">
                                        <a
                                            class="clearfix"
                                            href="/search/label/san-pham"
                                            title="Sản phẩm"
                                        >
                                            <picture>
                                                <img
                                                    alt="Sản phẩm"
                                                    class="img-responsive center-block"
                                                    src={{URL::asset('template/images/menu_1.jpg')}}
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>


</header>






























