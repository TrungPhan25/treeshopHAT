@extends('main')
@section('content')
<div class="container">
   <div class="row">
      <div class="container" id="hoatranweb">
         <div class="row">
            <div class="col-lg-12 col-md-12 details-product">
               <div class="col-md-9">
                  <div class="main section" id="main" name="Bài đăng trên Blog">
                     <div class="widget Blog" data-version="1" id="Blog1">
                        <div class="blog-posts hfeed">
                           <!--Can't find substitution for tag [defaultAdStart]-->
                           <div class="date-outer">
                              <div class="date-posts">
                                 <div class="post-outer">
                                    <div class="post hentry uncustomized-post-template">
                                       <section class='bread-crumb margin-bottom-30'>
                                          <div class='container'>
                                             <div class='row'>
                                                <div class='col-xs-12'>
                                                   <ul class='breadcrumb' itemscope='' itemtype='http://schema.org/BreadcrumbList'>
                                                      <li class='home'>
                                                         <a href='/' title='Trang chủ'>
                                                         <span>Trang chủ > </span>
                                                         </a>
                                                         <span>Sản phẩm ></span>
                                                          <span> {{$product->name}}</span>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <div class="post-header">
                                          <div class="post-header-line-1"></div>
                                       </div>
                                       <div
                                          class="post-body entry-content"
                                          id="post-body-8045809668104764054"
                                          itemprop="articleBody"
                                          >
                                          <div id="summary8045809668104764054">
                                             <div class="simpleCart_shelfItem">
                                                <div
                                                   class="col-xs-12 col-sm-12 col-lg-12 col-md-12 details-pro"
                                                   >
                                                   <div class="product-top clearfix">
                                                      <h1 class="title-head">
                                                         {{$product->name}}
                                                      </h1>
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                   <div class="relative product-image-block">
                                                      <div class="large-image zoom_pic">
                                                         <a
                                                            class="large_image_url"
                                                            data-rel="prettyPhoto[product-gallery]"
                                                            >
                                                            <div
                                                               style="
                                                               height: 402px;
                                                               width: 402px;
                                                               "
                                                               class="zoomWrapper"
                                                               >
                                                               <img
                                                                  id="zoom_01"
                                                                  src="{{ $product->avatar }}"
                                                                  alt="Cây Cọ Nhật B"
                                                                  class="img-responsive center-block item_thumb"
                                                                  style="position: absolute"
                                                                  />
                                                            </div>
                                                         </a>
                                                      </div>
                                                      <div
                                                         id="gallery_01"
                                                         class="owl-carousel owl-theme thumbnail-product margin-top-15 owl-loaded owl-drag"
                                                         data-md-items="4"
                                                         data-sm-items="4"
                                                         data-xs-items="4"
                                                         data-xss-items="3"
                                                         data-margin="10"
                                                         data-nav="true"
                                                         >
                                                         <div class="owl-stage-outer">
                                                            <div
                                                               class="owl-stage"
                                                               style="
                                                               transform: translate3d(
                                                               0px,
                                                               0px,
                                                               0px
                                                               );
                                                               transition: all 0s ease 0s;
                                                               width: 252px;
                                                               "
                                                               >
                                                               <div
                                                                  class="owl-item active"  style="  width: 74px;   margin-right: 10px;">
                                                                  <div class="item zoom_pic">
                                                                     <a class="thumb-link"href="javascript:void(0);"title="Cây Cọ Nhật B">
                                                                     <img src="{{ $product->avatar }}" alt="" >
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                               <div
                                                                  class="owl-item active"
                                                                  style="width: 74px;margin-right: 10px;" >
                                                                  <div class="item zoom_pic">
                                                                     <a class="thumb-link"   href="javascript:void(0);" title="Cây Cọ Nhật B" >
                                                                     <img src="{{ $product->avatar }}"alt="CâyCọNhậtB"/>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="owl-nav disabled">
                                                            <div class="owl-prev disabled">
                                                               <i
                                                                  class="fa fa-angle-left"
                                                                  aria-hidden="true"
                                                                  ></i>
                                                            </div>
                                                            <div class="owl-next disabled">
                                                               <i
                                                                  class="fa fa-angle-right"
                                                                  aria-hidden="true"
                                                                  ></i>
                                                            </div>
                                                         </div>
                                                         <div class="owl-dots disabled"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 details-pro">
                                                   <div
                                                      itemprop="offers"
                                                      itemscope=""
                                                      itemtype="http://schema.org/Offer"
                                                      >
                                                      <div class="price-box clearfix">
                                                         <div class="special-price">
                                                            <span class="price product-price item_price" style="padding-bottom: 6px">
                                                            {{$product->price_sale}}đ</span><span class="old-price">Giá cũ:
                                                            <del class="price product-price-old">{{$product->price}}</del>
                                                            </span>
                                                            <span class="save-price">Tiết kiệm:
                                                            <span class="price product-price-save">{{$product->price - $product->price_sale }}đ
                                                            </span></span
                                                               >
                                                         </div>
                                                      </div>
                                                      <div class="inventory_quantity">
                                                         <span class="stock-brand-title">
                                                         <strong>
                                                         <i class="ion ion-ios-checkmark-circle"></i>
                                                         Tình trạng:
                                                         </strong>
                                                         </span>
                                                         <span class="a-stock a2">
                                                            @if($product -> quantity > 0 )
                                                            <link itemprop="availability" />
                                                            Còn hàng
                                                         </span>
                                                         @else
                                                         <link itemprop="availability" />
                                                         Hết hàng</span>
                                                         @endif
                                                      </div>
                                                   </div>
                                                   <div
                                                      class="product-summary product_description margin-bottom-15 margin-top-15"
                                                      >
                                                      <div class="rte description">
                                                         {!! $product->detail !!}
                                                      </div>
                                                   </div>
                                                   <div class="form-product">
                                                      <form
                                                          class="form-inline has-validation-callback"
                                                         action="/treeshopHAT/public/add-cart"
                                                         id="add-to-cart-form"

                                                         method="post"
                                                         >
                                                         @if ($product->price !== NULL)
                                                         <div class="clearfix form-group">
                                                            <div
                                                               class="custom custom-btn-number form-control"
                                                               >
                                                               <button
                                                                  onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;"
                                                                  class="btn-minus btn-cts"
                                                                  type="button"
                                                                  >
                                                               –
                                                               </button>
                                                               <input type="text" maxlength="3" class="qty input-text item_quantity" id="qty" name="num_product" size="4" value="1"/>
                                                               <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">
                                                               +
                                                               </button>
                                                            </div>
                                                            <div class="btn-mua">
                                                               <button type="submit"  class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart item_add" id="s1"><span class="txt-main">
                                                               <i class="fa fa-cart-arrow-down padding-right-10"></i>Mua ngay</span>
                                                               </button>
                                                               <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            </div>
                                                         </div>
                                                         @endif
                                                         @csrf
                                                      </form>
                                                   </div>
                                                   <div class="clearfix"></div>
                                                   <div class="call-and-payment">
                                                      <div class="hotline_product">
                                                         Gọi điện để được tư vấn:
                                                         <a href="tel:0123456789" title="0123456789">0123 456 789</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div style="clear: both"></div>
                                       </div>
                                       <div class="clear"></div>
                                       <div class="section_product section_product-1 article-wraper clearfix">
                                          <div class="section-head clearfix" style="padding-top: 20px">
                                             <h2 class="title_blog">
                                                <a title="Xem thêm"> Xem thêm </a>
                                             </h2>
                                          </div>
                                          <div class="clear"></div>
                                          <div class="row">
                                             @foreach($products as $product)
                                             <div class="col-md-3 col-sm-3 col-xs-6">
                                                <div class="ant-single-product simpleCart_shelfItem">
                                                   <div class="ant-single-product-image zoom_pic">
                                                      <a href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                          <img src="{{ $product->avatar }}"
                                                         alt="{{ $product->name }}'"
                                                         class="img-responsive center-block item_thumb"
                                                         /></a>
                                                      <span
                                                         class="discount-label discount-label--green"
                                                         >-31%</span
                                                         >
                                                      <form
                                                         class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart"
                                                         >
                                                         <a
                                                            class="button ajax_addtocart add_to_cart item_add"
                                                            href="javascript:void(0);"
                                                            title="Mua ngay"
                                                            id="s2"
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
                                                            href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                                                            title="{{ $product->name }}'"
                                                            >{{$product->name}}</a
                                                            >
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
                                             @endforeach
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Can't find substitution for tag [adEnd]-->
                        </div>
                        <div class="post-feeds"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
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
                     <div class="widget HTML" data-version="1" id="HTML10">
                        <div class="widget-content">
                           <div class="promotion-block margin-top-20">
                              <h3>Hướng dẫn chọn đồ</h3>
                              <ul>
                                 <script src="/feeds/posts/default/-/tin-tuc?max-results=9&amp;orderby=published&amp;alt=json-in-script&amp;callback=labelhuongdan"></script>
                                 <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <a
                                       href="https://ant-green-ht.blogspot.com/2019/12/treo-bay-cac-vat-pham-may-man-cat-tuong.html"
                                       title="Treo bày các vật phẩm may mắn cát tường bừa bãi"
                                       >Treo bày các vật phẩm may mắn cát tường bừa
                                    bãi</a
                                       >
                                 </li>
                                 <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <a
                                       href="https://ant-green-ht.blogspot.com/2019/06/nasa-cong-bo-cay-luoi-ho-co-tac-dung.html"
                                       title="NASA đã công bố cây lưỡi hổ có tác dụng thanh lọc không khí rất tốt, chúng hấp thụ các chất gây ô nhiễm môi trường"
                                       >NASA đã công bố cây lưỡi hổ có tác dụng thanh lọc
                                    không khí rất tốt, chúng hấp thụ các chất gây ô
                                    nhiễm môi trường</a
                                       >
                                 </li>
                                 <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <a
                                       href="https://ant-green-ht.blogspot.com/2019/06/7-loai-cay-cuoi-nam-nhat-inh-phai-mua-e.html"
                                       title="7 loại cây cuối năm nhất định phải mua để giải trừ vận đen, kéo tài lộc vào nhà"
                                       >7 loại cây cuối năm nhất định phải mua để giải
                                    trừ vận đen, kéo tài lộc vào nhà</a
                                       >
                                 </li>
                                 <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <a
                                       href="https://ant-green-ht.blogspot.com/2019/06/6-thoi-xau-khien-ban-ngheo-quanh-nam-bo.html"
                                       title="6 thói xấu khiến bạn nghèo quanh năm, bỏ ngay đi để Thần Tài gõ cửa"
                                       >6 thói xấu khiến bạn nghèo quanh năm, bỏ ngay đi
                                    để Thần Tài gõ cửa</a
                                       >
                                 </li>
                                 <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <a
                                       href="https://ant-green-ht.blogspot.com/2019/06/at-cay-luoi-ho-trong-phong-ngu-sang-i.html"
                                       title="Đặt cây lưỡi hổ trong phòng ngủ, sáng đi làm gặp may chiều về nhà chồng 'cưng như trứng'"
                                       >Đặt cây lưỡi hổ trong phòng ngủ, sáng đi làm gặp
                                    may chiều về nhà chồng 'cưng như trứng'</a
                                       >
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="widget HTML" data-version="1" id="HTML11">
                        <div class="widget-content">
                           <div class="right_module">
                              <div class="similar-product">
                                 <div class="right-bestsell">
                                    <h2 style="margin-top: 10px">
                                       <a href="san-pham-moi" title="Bạn có thể thích"
                                          >Bạn có thể thích</a
                                          >
                                    </h2>
                                    <div class="list-bestsell">
                                       @foreach($products as $product)
                                       <div class="list-bestsell-item">
                                          <div class="thumbnail-container clearfix">
                                             <div class="product-image">
                                                <a
                                                   href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                                                   title="Cây Cọ Nhật B"
                                                   ><img
                                                   class="img-responsive"
                                                   src="{{ $product->avatar }}"
                                                   alt="{{ $product->name }}'"
                                                   /></a>
                                             </div>
                                             <div class="product-meta">
                                                <h3>
                                                   <a
                                                      href="/treeshopHAT/public/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                                                      title="{{ $product->name }}'"
                                                      >"{{ $product->name }}'"</a
                                                      >
                                                </h3>
                                                <div
                                                   class="bizweb-product-reviews-badge"
                                                   style="color: #feb10d !important"
                                                   >
                                                   <i
                                                      class="fa fa-star"
                                                      aria-hidden="true"
                                                      ></i
                                                      ><i
                                                      class="fa fa-star"
                                                      aria-hidden="true"
                                                      ></i
                                                      ><i
                                                      class="fa fa-star"
                                                      aria-hidden="true"
                                                      ></i
                                                      ><i
                                                      class="fa fa-star"
                                                      aria-hidden="true"
                                                      ></i
                                                      ><i
                                                      class="fa fa-star"
                                                      aria-hidden="true"
                                                      ></i>
                                                </div>
                                                <div class="product-price-and-shipping">
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
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
