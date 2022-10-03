@extends('admin.layout_admin')
@section('content_admin')
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Orders</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><i class="feather icon-home"></i></li>
                                    <li class="breadcrumb-item"><a href="/admin/orders">Orders</a></li>
                                    <li class="breadcrumb-item"><a href="/orders/detailorders">Detail Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ Hover-table ] start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Detail Orders</h5>
                                        <div class="float-right">
                                            <a class="btn btn-outline-dark feather icon-corner-up-left" data-toggle="tooltip" data-original-title="Return" href="/admin/orders"></a>
                                          </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="row">
                                            {{-- Detail order --}}
                                            <div class="col-md-6">
                                                <form>
                                                    <h3>
                                                        <i class="feather icon-shopping-cart">
                                                                Order Details
                                                        </i>
                                                    </h3>
                                                    <table class="table table-bordered">
                                                        <tbody>
            
                                                            <tr>
                                                                <th>Order ID</th>
                                                                <th class="text-right">1</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Order Day</th>
                                                                <th class="text-right text-info">20/10/2022</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Order Address</th>
                                                                <th class="text-right text-info">TP.HCM</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form> 
                                            </div>
                                            {{-- Detail product --}}
                                            <div class="col-md-6">
                                                <form>
                                                    <h3>
                                                        <i class="feather icon-user">
                                                                Customer Details
                                                        </i>
                                                    </h3>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Customers ID</th>
                                                            <th class="text-right">1</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Customers Name</th>
                                                            <th class="text-right text-info">Nguyễn Văn B</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone Number</th>
                                                            <th class="text-right text-info">0818888888</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <th class="text-right">TP.HCM</th>
                                                        </tr>
                                                    </table>
                                                </form> 
                                            </div>
                                        </div>
                                        <hr>
                                        <hr>
                                        {{-- Form table product --}}
                                        <form class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th class="text-left" scope="col">Product Name</th>
                                                    <th class="text-left" scope="col">Type</th>
                                                    <th class="text-right" scope="col">Quantity</th>
                                                    <th class="text-right" scope="col">Unit Price</th>
                                                    <th class="text-right" scope="col">Total</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-primary text-left">Mắt kính</td>
                                                    <td class="text-left">Cái</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">500.000</td>
                                                    <td class="text-right">1.000.000</td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="4" class="text-right">Sub-Total</td>
                                                    <td class="text-right">1.000.000</td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="4" class="text-right">Total</td>
                                                    <td class="text-right text-success">1.000.000</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Hover-table ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
