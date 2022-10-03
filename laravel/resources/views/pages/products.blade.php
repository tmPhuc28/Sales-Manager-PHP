@extends('layout_pages')
@section('content_pages')
    <section id="advertisement">
        <div class="container">
            <img src="{{ asset('frontend/images/shop/advertisement.jpg') }}" alt="" />
        </div>
    </section>

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
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection