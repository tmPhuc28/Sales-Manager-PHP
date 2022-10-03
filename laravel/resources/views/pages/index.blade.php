@extends('layout_pages')
@section('content_pages')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Kính Titan</h2>
                                    <p>Chất lượng kính của các bạn, tầm nhìn của các bạn, là trách nhiệm mà chúng tôi vinh hạnh được nhận lấy và bảo đảm. Hãy để chúng tôi chăm sóc cho mắt của bạn!!</p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('frontend/images/home/baner1.jpg') }}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{ asset('frontend/images/home/pricing.png') }}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Mắt Kính Đa Tròng Cao Cấp</h2>
                                    <p>Mắt kính đa tròng cao cấp Hàn Quốc khởi động xu hướng thời trang mới với thiết kế trẻ trung và hiện đại sẽ là một phụ kiện thời trang không thể thiếu đối với các bạn trẻ.</p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('frontend/images/home/baner2.jpg') }}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{ asset('frontend/images/home/pricing.png') }}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>KÍNH MẮT NỮ THỜI TRANG CAO CẤP ELLY</h2>
                                    <p>Kính mắt nữ thời trang cao cấp ELLY – EK29, mẫu kính cực kỳ thời trang cho phái đẹp phiên bản màu đen sang trọng, quyến rũ là sự lựa chọn hoàn hảo cho phong cách thời trang của bạn mùa mốt năm nay.</p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('frontend/images/home/baner3.jpg') }}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{ asset('frontend/images/home/pricing.png') }}" class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                @include('pages.category')
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach ($data as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('backend/images/products/'.$item->Img) }}" alt="" />
                                            <h2>{{ number_format($item->Price) }} VND</h2>
                                            <p>{{ $item->ProductName }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{ number_format($item->Price) }} VND</h2>
                                                <p>{{ $item->ProductName }}</p>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:" onclick="addCart({{ $item->idProduct }})"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="/product-detail/{{ $item->idProduct }}" class="btn btn-default add-to-cart"><i class="fa fa-bar"></i>Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection