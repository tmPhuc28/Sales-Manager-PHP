@extends('layout_pages')
@section('content_pages')
    <section>
        <div class="container">
            <div class="row">
                @include('pages.category')
                
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset('backend/images/products/'.$data->Img) }}" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                {{-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> --}}
                                <h2>{{ $data->ProductName }}</h2>
                                <p>{{ $data->Description }}</p>
                                {{-- <img src="images/product-details/rating.png" alt="" /> --}}
                                <form action="/cart/add" method="post">
                                    {{ csrf_field() }}
                                    <span>
                                        <span>{{ number_format($data->Price) }} VND</span><br>
                                        <label>Quantity:</label>
                                        <input type="text" name="Quantity" value="1" />
                                        <input type="hidden" name="Id" value="{{ $data->idProduct }}" />
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </span>
                                </form>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    
                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" class="active" data-toggle="tab">Details</a></li>
                            </ul>
                        </div>
                        <div>
                            <div id="details" >
                                @foreach ($dataCate as $item)
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('backend/images/products/'.$item->Img) }}" alt="" />
                                                    <h2>{{ number_format($item->Price) }} VND</h2>
                                                    <p>{{ $item->ProductName }}</p>
                                                    <a href="/cart" onclick="addToCart({{ $item->idProduct }})" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!--/category-tab-->
                    
                </div>
            </div>
        </div>
    </section>
@endsection