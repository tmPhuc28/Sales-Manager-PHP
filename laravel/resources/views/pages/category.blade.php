<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach ($category as $item)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="/category/{{ $item->idCategory }}">{{ $item->CategoryName }}</a></h4>
                    </div>
                </div>    
            @endforeach
        </div><!--/category-products-->
    </div>

    <div class="brands_products"><!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach ($manufacturers as $item)
                    <li><a href="/manufacturer/{{ $item->idManufacturer }}">{{ $item->ManufacturerName }}</a></li>
                @endforeach
            </ul>
        </div>
    </div><!--/brands_products-->
    
    <div class="shipping text-center"><!--shipping-->
        <img src="{{ asset('frontend/images/home/shipping.jpg') }}" alt="" />
    </div><!--/shipping-->
</div>