@extends('client.layouts.master')

@section('title')
    Home
@endsection

@section('content')
            <!-- Begin Slider Area Two -->
            <div class="slider-area slider-area-2">

                <div class="kenne-element-carousel home-slider home-slider-2 transparent-arrow" data-slick-options='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": true,
                    "dots": false,
                    "autoplay" : true,
                    "fade" : true,
                    "autoplaySpeed" : 7000,
                    "pauseOnHover" : false,
                    "pauseOnFocus" : false
                    }' data-slick-responsive='[
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 1
                    }},
                    {"breakpoint":575, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>
                    <div class="slide-item bg-3 animation-style-01 white-color">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="slide-content">
                                <span>Exclusive Offer -20% Off This Week</span>
                                <h2>Accessories <br> Explore Trending</h2>
                                <p class="short-desc">Aliquam error eos cumque aut repellat quasi accusantium inventore necessitatibus. Vel quisquam distinctio in inventore dolorum.</p>
                                <div class="slide-btn">
                                    <a class="kenne-btn transparent-btn" href="shop-left-sidebar.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item bg-4 animation-style-01">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="slide-content">
                                <span>Exclusive Offer -10% Off This Week</span>
                                <h2>Stylist <br> Female Clothes</h2>
                                <p class="short-desc-2">Made from Soft, Durable, US-grown Supima cotton.</p>
                                <div class="slide-btn">
                                    <a class="kenne-btn" href="shop-left-sidebar.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
            <!-- Slider Area Two End Here -->
    
            <!-- Begin Banner Area Three -->
            <div class="banner-area-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-6 custom-xxs-col">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascrip:void(0)">
                                        <img class="img-full" src="{{asset('theme/client/assets/images/banner/2-1.jpg')}}" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 custom-xxs-col">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascrip:void(0)">
                                        <img class="img-full" src="{{asset('theme/client/assets/images/banner/2-2.jpg')}}" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 custom-xxs-col">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascrip:void(0)">
                                        <img class="img-full" src="{{asset('theme/client/assets/images/banner/2-3.jpg')}}" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area Three End Here -->
    
            <!-- Begin Product Area -->
            <div class="product-area ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>New Product</h3>
                                <div class="product-arrow"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "infinite": false,
                            "arrows": true,
                            "dots": false,
                            "spaceBetween": 30,
                            "appendArrows": ".product-arrow"
                            }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {
                            "slidesToShow": 3
                            }},
                            {"breakpoint":768, "settings": {
                            "slidesToShow": 2
                            }},
                            {"breakpoint":575, "settings": {
                            "slidesToShow": 1
                            }}
                        ]'>
                            @foreach ($newProducts as $newProduct)
                                
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="{{Storage::url($newProduct->img_thumbnail)}}" alt="Kenne's Product Image">
                                            <img class="secondary-img" src="{{Storage::url($newProduct->img_thumbnail)}}" alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">{{$newProduct->name}}</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($newProduct->price_sale, 0, ',', '.')}}<sup>đ</sup></span>
                                                <span class="old-price">{{number_format($newProduct->price_regular, 0, ',', '.')}}<sup>đ</sup></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                                {{-- <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/2-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/2-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Bestseller</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Nulla laboriosam</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$80.00</span>
                                                    <span class="old-price">$85,00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/3-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/3-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">Hot</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Adipisci voluptas</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$75.91</span>
                                                    <span class="old-price">$80.99</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/4-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/4-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Bestseller</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Possimus beatae</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$65.00</span>
                                                    <span class="old-price">$70.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/5-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/5-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">Hot</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Voluptates laudantium</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$95.00</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/6-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/6-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Bestseller</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Eligendi voluptate</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$60.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/7-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/7-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">Hot</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Excepturi perspiciatis</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$50.00</span>
                                                    <span class="old-price">$60.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/8-1.jpg')}}" alt="Kenne's Product Image">
                                                <img class="secondary-img" src="{{asset('theme/client/assets/images/product/8-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Bestseller</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="single-product.html">Esse eveniet</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">$70.00</span>
                                                    <span class="old-price">$75.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
    
            <!-- Begin Banner Area Five -->
            <div class="banner-area-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img"></div>
                                <div class="banner-content">
                                    <span>In-Store & Online</span>
                                    <h3>
                                        Men's Backpack
                                        <br>
                                    Wallets & More!
                                    </h3>
                                    <div class="kenne-btn-ps_center">
                                        <a class="kenne-btn transparent-btn black-color square-btn" href="shop-left-sidebar.html">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area Five End Here -->
    
            <!-- Begin Product Tab Area -->
            <div class="product-tab_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>All Product</h3>
                                <div class="product-tab">
                                    <ul class="nav product-menu">
                                        <li><a class="active" data-bs-toggle="tab" href="#bag"><span>Bag</span></a>
                                        </li>
                                        <li><a data-bs-toggle="tab" href="#plaid-shirts"><span>Plaid Shirts</span></a></li>
                                        <li><a data-bs-toggle="tab" href="#shoes"><span>Shoes</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content kenne-tab_content">
                                <div id="bag" class="tab-pane active show" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": true,
                                        "dots": false,
                                        "spaceBetween": 30
                                        }' data-slick-responsive='[
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 3
                                        }},
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 2
                                        }},
                                        {"breakpoint":575, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>
    
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/5-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/5-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Voluptates
                                                                laudantium</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$95.00</span>
                                                            <span class="old-price">$100.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/6-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/6-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Eligendi
                                                                voluptate</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$60.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/7-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/7-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Excepturi
                                                                perspiciatis</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/8-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/8-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                                        </h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$70.00</span>
                                                            <span class="old-price">$75.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/1-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/1-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Quibusdam
                                                                ratione</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$46.91</span>
                                                            <span class="old-price">$50.99</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/2-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/2-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Nulla
                                                                laboriosam</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$80.00</span>
                                                            <span class="old-price">$85,00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/3-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/3-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Adipisci
                                                                voluptas</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$75.91</span>
                                                            <span class="old-price">$80.99</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/4-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/4-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Possimus
                                                                beatae</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$65.00</span>
                                                            <span class="old-price">$70.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                <div id="plaid-shirts" class="tab-pane" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": true,
                                        "dots": false,
                                        "spaceBetween": 30
                                        }' data-slick-responsive='[
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":575, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>
    
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/7-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/7-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Excepturi
                                                                perspiciatis</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/8-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/8-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                                        </h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$70.00</span>
                                                            <span class="old-price">$75.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/6-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/6-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Eligendi
                                                                voluptate</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$60.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/2-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/2-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Nulla
                                                                laboriosam</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$80.00</span>
                                                            <span class="old-price">$85,00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/3-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/3-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Adipisci
                                                                voluptas</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$75.91</span>
                                                            <span class="old-price">$80.99</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/5-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/5-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Voluptates
                                                                laudantium</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$95.00</span>
                                                            <span class="old-price">$100.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                <div id="shoes" class="tab-pane" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": true,
                                        "dots": false,
                                        "spaceBetween": 30
                                        }' data-slick-responsive='[
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":575, "settings": {
                                        "slidesToShow": 1
                                        }}
                                    ]'>
    
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/2-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/2-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Nulla
                                                                laboriosam</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$80.00</span>
                                                            <span class="old-price">$85,00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/3-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/3-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Adipisci
                                                                voluptas</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$75.91</span>
                                                            <span class="old-price">$80.99</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/8-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/8-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                                        </h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$70.00</span>
                                                            <span class="old-price">$75.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/1-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/1-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Quibusdam
                                                                ratione</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$46.91</span>
                                                            <span class="old-price">$50.99</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/2-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/2-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Nulla
                                                                laboriosam</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$80.00</span>
                                                            <span class="old-price">$85,00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="primary-img" src="{{asset('theme/client/assets/images/product/6-1.jpg')}}" alt="Kenne's Product Image">
                                                        <img class="secondary-img" src="{{asset('theme/client/assets/images/product/6-2.jpg')}}" alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a href="single-product.html">Eligendi
                                                                voluptate</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$60.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Tab Area End Here -->
    
            <!-- Begin List Product Area -->
            <div class="list-product_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Best <span>Selling Products</span></h3>
                                <div class="list-product_arrow"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel list-product_slider slider-nav" data-slick-options='{
                            "slidesToShow": 3,
                            "slidesToScroll": 1,
                            "infinite": false,
                            "arrows": true,
                            "dots": false,
                            "spaceBetween": 30,
                            "appendArrows": ".list-product_arrow"
                            }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {
                            "slidesToShow": 2
                            }},
                            {"breakpoint":768, "settings": {
                            "slidesToShow": 1
                            }},
                            {"breakpoint":575, "settings": {
                            "slidesToShow": 1
                            }}
                        ]'>
    
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/8-1.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-10%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">hoodie, jacket</span>
                                                <h3 class="product-name"><a href="single-product.html">Quibusdam ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                    <span class="old-price">$50.99</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/6-2.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">sleeveless, frocks</span>
                                                <h3 class="product-name"><a href="single-product.html">Quibusdam ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$50.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/4-1.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-15%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">crochet, scarf</span>
                                                <h3 class="product-name"><a href="single-product.html">Quibusdam ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$80.00</span>
                                                    <span class="old-price">$85.0</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('theme/client/assets/images/product/1-1.jpg')}}" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-20%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">shirts, t-shirt</span>
                                                <h3 class="product-name"><a href="single-product.html">Quibusdam ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$75.91</span>
                                                    <span class="old-price">$80.99</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List Product Area End Here -->
    
            <!-- Begin Latest Blog Area -->
            <div class="latest-blog_area latest-blog_area-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Latest <span>Blog</span></h3>
                                <div class="latest-blog_arrow"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel latest-blog_slider slider-nav" data-slick-options='{
                            "slidesToShow": 2,
                            "slidesToScroll": 1,
                            "infinite": true,
                            "arrows": true,
                            "dots": false,
                            "spaceBetween": 30,
                            "appendArrows": ".latest-blog_arrow"
                            }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {
                            "slidesToShow": 1
                            }},
                            {"breakpoint":768, "settings": {
                            "slidesToShow": 1
                            }},
                            {"breakpoint":575, "settings": {
                            "slidesToShow": 1
                            }}
                        ]'>
    
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('theme/client/assets/images/blog/4.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('theme/client/assets/images/blog/5.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('theme/client/assets/images/blog/4.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('theme/client/assets/images/blog/5.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer took a galley of type.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Blog Area End Here -->
    
@endsection

