@extends('main')
@section('content')
    <section class='bread-crumb margin-bottom-30'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12'>
                    <ul class='breadcrumb' itemscope='' itemtype='http://schema.org/BreadcrumbList'>
                        <li class='home'>
                            <a href='/' title='Trang chủ'>
                                <span>Trang chủ ></span>
                            </a>
                            <span>Giỏ hàng</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <form class="bg0 p-t-36 p-b-72" method="POST">
        @include('admin.alert')

        @if (count($products) != 0)

            <div class="container">

                <div class="row cart_titel">

                    <div class="col-lg-8 col-xl-7 m-lr-auto m-b-50">
                        <div class="text-center card-content">Giỏ hàng của bạn</div>
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">

                                @php $total = 0; @endphp

                                <table class="table-shopping-cart">
                                    <tbody>
                                    <tr class="table_head">
                                        <th class="column-1"></th>
                                        <th class="column-2">Sản phẩm</th>
                                        <th class="column-3">Giá</th>
                                        <th class="column-4">Số lượng</th>
                                        <th class="column-5">Tổng tiền</th>
                                        <th class="column-6">&nbsp;</th>

                                    </tr>
                                    @foreach($products as $key=>$product)
                                        @php
                                            $price = $product->price_sale != 0 ? $product->price_sale : $product->price;

                                            $priceEnd = $price * $carts[$product->id];
                                            if($priceEnd<0)
                                               $priceEnd=$price ;
                                            $total += $priceEnd;
                                        @endphp
                                        <tr class="table_row">
                                            <td class="column-1 text-cent">
                                                <div class="how-itemcart1">
                                                    <img src="{{$product->avatar}}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2 text-cent">{{$product->name}}</td>
                                            <td class="column-3 text-cent">{{number_format( $price, 0,'','.')}}</td>
                                            <td class="column-4 text-cent">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0 new-flex">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">

                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>
                                                    <input class="input_w cl3 txt-center num-product bx-10"
                                                           type="number" name="num_product[{{$product->id }}]"
                                                           @if($carts[$product->id] >0)
                                                           value="{{$carts[$product->id]}}"
                                                    @elseif($carts[$product->id] <= 0)
                                                        value="1"
                                                    @endif>
                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5 text-cent">{{number_format( $priceEnd, 0,'','.') }}</td>
                                            <td class="">
                                                <a href="/treeshopHAT/public/carts/delete/{{$product->id}}">Xóa </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>

                            <div class="">


                                <input type="submit" value="Cập nhật" formaction="/treeshopHAT/public/update-cart"
                                       class="titel-car flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                @csrf

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-4 col-xl-5 m-lr-auto m-b-50 ">
                        <div class=" total-list bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm ">
                            <h4 class="titel-car text-cent cl2 p-b-30">
                                HÓA ĐƠN
                            </h4>

                            <div class=" ">
                                <div class="">
                                    <span class="titel-car text-cent cl2">
                                        Tổng tiền: {{ number_format($total, 0, '', '.') }}đ
                                    </span>
                                </div>
                            </div>


                            <div class=" bor12 p-t-15 p-b-30">
                                <div class="size-100  p-r-0-sm w-full-ssm">
                                    <div class="p-t-15">
									<span class=" cl8 titel-car-a">
                                            Thông Tin Khách Hàng:
                                        </span>

                                        <div class="bg0 m-b-12 titel-car-a">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name"
                                            >
                                        </div>
                                        <span class=" cl8 titel-car-a">
                                            Số điện thoại:
                                        </span>
                                        <div class=" bg0 m-b-12 titel-car-a">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone"
                                            >
                                        </div>
                                        <span class=" cl8 titel-car-a">
                                          Địa chỉ:
                                        </span>
                                        <div class=" bg0 m-b-12 titel-car-a">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                                   name="address">
                                        </div>
                                        <span class=" cl8 titel-car-a">
                                         Mail:
                                        </span>
                                        <div class=" bg0 m-b-12 titel-car-a">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email">
                                        </div>
                                        <span class=" cl8 titel-car-a">
                                         Ghi chú:
                                        </span>
                                        <div class="bg0 m-b-12 titel-car-a">
                                            <textarea class="cl8 plh3 size-111 p-lr-15" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button
                                class="titel-car flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @else
        <div class="text-center"><h2>Giỏ hàng trống</h2></div>
    @endif
@endsection
