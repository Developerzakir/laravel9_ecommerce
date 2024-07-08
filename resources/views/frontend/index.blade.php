@extends('frontend.front_master')
@section('front')
@section('title')
Home BD Online Shop
@endsection




<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
      <div class="row"> 
        <!-- ============================================== SIDEBAR ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
          
          <!-- ================================== TOP NAVIGATION ================================== -->
          @include('frontend.common.vertical_menu')
          <!-- /.side-menu --> 
          <!-- ================================== TOP NAVIGATION : END ================================== --> 
          
          <!-- ============================================== HOT DEALS ============================================== -->
        @include('frontend.common.hot_deals')
          <!-- ============================================== HOT DEALS: END ============================================== --> 
          
          <!-- ============================================== SPECIAL OFFER ============================================== -->
          
          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Offer</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              
                <div class="item">
                  <div class="products special-product">
                    @foreach ($special_offer as $product)
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> 
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </a>
                              </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name">
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                </a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    @endforeach
                  
                  </div>
                </div>
               
              
              </div>
            </div>
            <!-- /.sidebar-widget-body --> 
          </div>
          <!-- /.sidebar-widget --> 
          <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
          <!-- ============================================== PRODUCT TAGS ============================================== -->
          @include('frontend.common.product_tags')
          <!-- /.sidebar-widget --> 
          <!-- ============================================== PRODUCT TAGS : END ============================================== --> 


          <!-- ============================================== SPECIAL DEALS ============================================== -->
          
          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Deals</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products special-product">
                    @foreach ( $special_deals as $product)
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset($product->product_thumbnail)}}"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name">
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                </a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    @endforeach
                   
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p18.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p17.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p16.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p15.jpg')}}" alt="images">
                                <div class="zoom-overlay"></div>
                                </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p14.jpg')}}"  alt="">
                                <div class="zoom-overlay"></div>
                                </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p13.jpg')}}" alt="image"> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget-body --> 
          </div>
          <!-- /.sidebar-widget --> 
          <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
          <!-- ============================================== NEWSLETTER ============================================== -->
          <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
            <h3 class="section-title">Newsletters</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <p>Sign Up for Our Newsletter!</p>
              <form>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                </div>
                <button class="btn btn-primary">Subscribe</button>
              </form>
            </div>
            <!-- /.sidebar-widget-body --> 
          </div>
          <!-- /.sidebar-widget --> 
          <!-- ============================================== NEWSLETTER: END ============================================== --> 
          
          <!-- ============================================== Testimonials============================================== -->
          @include('frontend.common.testimonials')
          
          <!-- ============================================== Testimonials: END ============================================== -->
          
          <div class="home-banner"> <img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"> </div>
        </div>
        <!-- /.sidemenu-holder --> 
        <!-- ============================================== SIDEBAR : END ============================================== --> 
        
        <!-- ============================================== CONTENT ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
          <!-- ========================================== SECTION – HERO ========================================= -->
          
          <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
             
              @foreach($sliders as $slider) 
              <div class="item" style="background-image: url({{ asset($slider->slider_img) }});">
                <div class="container-fluid">
                  <div class="caption bg-color vertical-center text-left">
                    <div class="slider-header fadeInDown-1">{{ $slider->title }}</div>
                    
                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{ $slider->description }}</span> </div>
                    <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                  </div>
                  <!-- /.caption --> 
                </div>
                <!-- /.container-fluid --> 
              </div>
              <!-- /.item --> 
              @endforeach
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          
          <!-- ========================================= SECTION – HERO : END ========================================= --> 
          
          <!-- ============================================== INFO BOXES ============================================== -->
          <div class="info-boxes wow fadeInUp">
            <div class="info-boxes-inner">
              <div class="row">
                <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">money back</h4>
                      </div>
                    </div>
                    <h6 class="text">30 Days Money Back Guarantee</h6>
                  </div>
                </div>
                <!-- .col -->
                
                <div class="hidden-md col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">free shipping</h4>
                      </div>
                    </div>
                    <h6 class="text">Shipping on orders over $99</h6>
                  </div>
                </div>
                <!-- .col -->
                
                <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">Special Sale</h4>
                      </div>
                    </div>
                    <h6 class="text">Extra $5 off on all items </h6>
                  </div>
                </div>
                <!-- .col --> 
              </div>
              <!-- /.row --> 
            </div>
            <!-- /.info-boxes-inner --> 
            
          </div>
          <!-- /.info-boxes --> 
          <!-- ============================================== INFO BOXES : END ============================================== --> 
          <!-- ============================================== SCROLL TABS ============================================== -->
          <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
            <div class="more-info-tab clearfix ">
              <h3 class="new-product-title pull-left">New Products</h3>
              <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                
                @foreach($categories as $category)
                <li><a data-transition-type="backSlide" href="#category{{$category->id}}" data-toggle="tab">{{ $category->category_name_en }}</a></li>
                @endforeach
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class="tab-content outer-top-xs">

              <div class="tab-pane in active" id="all">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    @foreach($products as  $product)
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                            @endphp   
                            
                            
                            <div>
                              @if ($product->discount_price == NULL)
                              <div class="tag new"><span>new</span></div>
                              @else
                              <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                              @endif
                            </div>

                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                            </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>

                            @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                           @else
                             <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                          @endif
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    @endforeach
                    <!-- /.item -->
                
                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
              <!-- /.tab-pane -->







              
              @foreach ( $categories as $category)
              <div class="tab-pane " id="category{{$category->id}}">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    @php 
                    $catwisePrduct = App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                    @endphp 

                    @forelse($catwisePrduct as  $product)
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                            @endphp   
                            
                            
                            <div>
                              @if ($product->discount_price == NULL)
                              <div class="tag new"><span>new</span></div>
                              @else
                              <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                              @endif
                            </div>

                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                            </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>

                            @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                           @else
                             <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                          @endif
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    @empty 
                    <h5 class="text-danger">No Product Found!</h5>
                    @endforelse
                    <!-- /.item -->
                
                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
              @endforeach
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="laptop">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p11.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p12.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p13.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="{{asset('frontend/assets/images/products/p14.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p15.jpg')}}" alt="image"></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="{{asset('frontend/assets/images/products/p16.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item --> 
                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="apple">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="{{asset('frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p17.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p16.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p13.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p14.jpg')}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item --> 
                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
              <!-- /.tab-pane --> 
              
            </div>
            <!-- /.tab-content --> 
          </div>
          <!-- /.scroll-tabs --> 
          <!-- ============================================== SCROLL TABS : END ============================================== --> 
          <!-- ============================================== WIDE PRODUCTS ============================================== -->
          <div class="wide-banners wow fadeInUp outer-bottom-xs">
            <div class="row">
              <div class="col-md-7 col-sm-7">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/home-banner1.jpg')}}" alt=""> </div>
                </div>
                <!-- /.wide-banner --> 
              </div>
              <!-- /.col -->
              <div class="col-md-5 col-sm-5">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/home-banner2.jpg')}}" alt=""> </div>
                </div>
                <!-- /.wide-banner --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.wide-banners --> 
          
          <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">Featured products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

              @foreach ( $featured as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> 
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                      </div>
                      <!-- /.image -->

                      @php
                      $amount = $product->selling_price - $product->discount_price;
                      $discount = ($amount/$product->selling_price) * 100;
                      @endphp    
                      
                      <div>
                        @if ($product->discount_price == NULL)
                        <div class="tag new"><span>new</span></div>
                        @else
                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                        @endif
                      </div>

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">

                      
                      <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                    </a></h3>
                                  <div class="rating rateit-small"></div>
                                  <div class="description"></div>
                        
                                 @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                 @else
                         <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                                 @endif
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">

                            <button class="btn btn-primary icon" type="button" data-toggle="modal" 
                            data-target="#myModal" id="{{ $product->id }}" onclick="productView(this.id)"  > <i class="fa fa-shopping-cart"></i> </button>

                         

                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>

                    

             
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>

            
              @endforeach
              <!-- /.item -->

            </div>
            <!-- /.home-owl-carousel --> 

           
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="closeModel">&times;</button>
                    <h4 class="modal-title"><span id="pname"></span></h4>
                  </div>
                  <div class="modal-body">
                   <div class="row">
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 180px;" id="pimage">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-group">
                        <li class="list-group-item">Product Price: 
                          <strong class="text-danger">$<span id="pprice"></span></strong>
                          <del id="oldprice">$</del>
                        </li>
                        <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
                        <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
                        <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
                        <li class="list-group-item">Stock: 
                          <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span> 
<span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span> 
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                      <select class="form-select form-control" name="color" id="color">
                        <label for="exampleFormControlSelect1">Choose Color</label>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                     </div>
                     <div class="form-group" id="sizeArea">
                      <select class="form-select form-control" name="size" id="size">
                        <label for="exampleFormControlSelect1">Choose Size</label>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                     </div>
                     <div class="form-group">
                      <label for="exampleFormControlSelect1">Quantity</label>
                      <input type="number" class="form-control" value="1" min="1" id="qty">
                     </div>

                     <input type="hidden" id="product_id">

                     <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()">Add to Cart</button>

                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>
          
            {{-- add to cart modal end --}}
          </section>
          <!-- /.section --> 
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 

          <!--skip product 0 start-->
          <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">{{$skip_category_0->category_name_en}}</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

              @foreach ( $skip_product_0 as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> 
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                      </div>
                      <!-- /.image -->

                      @php
                      $amount = $product->selling_price - $product->discount_price;
                      $discount = ($amount/$product->selling_price) * 100;
                      @endphp    
                      
                      <div>
                        @if ($product->discount_price == NULL)
                        <div class="tag new"><span>new</span></div>
                        @else
                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                        @endif
                      </div>

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">

                      
                      <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                    </a></h3>
                                  <div class="rating rateit-small"></div>
                                  <div class="description"></div>
                        
                                 @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                 @else
                         <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                                 @endif
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              @endforeach
              <!-- /.item -->
           
              
             
            </div>
            <!-- /.home-owl-carousel --> 
          </section>
          <!--skip product 0 end-->

           <!--skip product 1 start-->
           <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">
              @if(session()->get('language') == 'hindi') {{ $skip_category_1->category_name_hin }} @else {{ $skip_category_1->category_name_en }} @endif
            </h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

              @foreach ( $skip_product_1 as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> 
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                      </div>
                      <!-- /.image -->

                      @php
                      $amount = $product->selling_price - $product->discount_price;
                      $discount = ($amount/$product->selling_price) * 100;
                      @endphp    
                      
                      <div>
                        @if ($product->discount_price == NULL)
                        <div class="tag new"><span>new</span></div>
                        @else
                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                        @endif
                      </div>

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">

                      
                      <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                    </a></h3>
                                  <div class="rating rateit-small"></div>
                                  <div class="description"></div>
                        
                                 @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                 @else
                         <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                                 @endif
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              @endforeach
              <!-- /.item -->
           
              
             
            </div>
            <!-- /.home-owl-carousel --> 
          </section>
          <!--skip product 1 end-->

           <!--skip brand product 1 start-->
           <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">
              @if(session()->get('language') == 'hindi') {{ $skip_brand_1->brand_name_hin }} @else {{ $skip_brand_1->brand_name_en }} @endif
            </h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

              @foreach ( $skip_brand_product_1  as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> 
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                      </div>
                      <!-- /.image -->

                      @php
                      $amount = $product->selling_price - $product->discount_price;
                      $discount = ($amount/$product->selling_price) * 100;
                      @endphp    
                      
                      <div>
                        @if ($product->discount_price == NULL)
                        <div class="tag new"><span>new</span></div>
                        @else
                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                        @endif
                      </div>

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">

                      
                      <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                        @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                    </a></h3>
                                  <div class="rating rateit-small"></div>
                                  <div class="description"></div>
                        
                                 @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
                                 @else
                         <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                                 @endif
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              @endforeach
              <!-- /.item -->
           
              
             
            </div>
            <!-- /.home-owl-carousel --> 
          </section>
          <!--skip brand product 1 end-->
          <!-- ============================================== WIDE PRODUCTS ============================================== -->
          <div class="wide-banners wow fadeInUp outer-bottom-xs">
            <div class="row">
              <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/home-banner.jpg')}}" alt=""> </div>
                  <div class="strip strip-text">
                    <div class="strip-inner">
                      <h2 class="text-right">New Mens Fashion<br>
                        <span class="shopping-needs">Save up to 40% off</span></h2>
                    </div>
                  </div>
                  <div class="new-label">
                    <div class="text">NEW</div>
                  </div>
                  <!-- /.new-label --> 
                </div>
                <!-- /.wide-banner --> 
              </div>
              <!-- /.col --> 
              
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.wide-banners --> 
          <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
          <!-- ============================================== BEST SELLER ============================================== -->
          
          <div class="best-deal wow fadeInUp outer-bottom-xs">
            <h3 class="section-title">Best seller</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p20.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p21.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p22.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p23.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p24.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p25.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p26.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{asset('frontend/assets/images/products/p27.jpg')}}" alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget-body --> 
          </div>
          <!-- /.sidebar-widget --> 
          <!-- ============================================== BEST SELLER : END ============================================== --> 
          
          <!-- ============================================== BLOG SLIDER ============================================== -->
          <section class="section latest-blog outer-bottom-vs wow fadeInUp">
            <h3 class="section-title">latest form blog</h3>
            <div class="blog-slider-container outer-top-xs">
              <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{asset('frontend/assets/images/blog-post/post1.jpg')}}" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                      <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{asset('frontend/assets/images/blog-post/post2.jpg')}}" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item --> 
                
                <!-- /.item -->
                
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{asset('frontend/assets/images/blog-post/post1.jpg')}}" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{asset('frontend/assets/images/blog-post/post2.jpg')}}" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{asset('frontend/assets/images/blog-post/post1.jpg')}}" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->
                    
                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                    <!-- /.blog-post-info --> 
                    
                  </div>
                  <!-- /.blog-post --> 
                </div>
                <!-- /.item --> 
                
              </div>
              <!-- /.owl-carousel --> 
            </div>
            <!-- /.blog-slider-container --> 
          </section>
          <!-- /.section --> 
          <!-- ============================================== BLOG SLIDER : END ============================================== --> 
          
          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section wow fadeInUp new-arriavls">
            <h3 class="section-title">New Arrivals</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p19.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p28.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p30.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p1.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p2.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p3.jpg')}}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item --> 
            </div>
            <!-- /.home-owl-carousel --> 
          </section>
          <!-- /.section --> 
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
          
        </div>
        <!-- /.homebanner-holder --> 
        <!-- ============================================== CONTENT : END ============================================== --> 
      </div>
      <!-- /.row --> 
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      @include('frontend.inc.brands')
      <!-- /.logo-slider --> 
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
    </div>
    <!-- /.container --> 
  </div>


    
@endsection