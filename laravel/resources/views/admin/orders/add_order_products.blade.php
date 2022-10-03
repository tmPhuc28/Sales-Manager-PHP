@extends('admin.layout_admin')
@section('content_admin')
<div class="pcoded-main-container">
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
                                    <li class="breadcrumb-item"><a href="/admin/orders">Orders</a></li>
                                    <li class="breadcrumb-item"><a href="/orders/addorders">Add Orders</a></li>
                                    <li class="breadcrumb-item"><a href="/orders/addOrderProducts">Add Products</a></li>
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
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add Orders</h5>
                                        <div class="float-right">
                                            <button class="btn btn-primary feather icon-save" data-toggle="tooltip" data-original-title="Save" type="submit"></button>
                                            <a class="btn btn-secondary feather icon-corner-up-left" data-toggle="tooltip" data-original-title="Cancel" href="/admin/orders"></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="table-responsive">
                                                    <table class="table table-hover table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary text-left">Product</th>
                                                                <th class="text-primary text-right">Quantity</th>
                                                                <th class="text-primary text-right">Unit Price</th>
                                                                <th class="text-primary text-right">Total</th>
                                                                <th class="text-primary text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th class="text-left" scope="row">Mắt kính</th>
                                                                <td class="text-right">
                                                                    <div class="input-group text-right" style="max-width: 200px;">
                                                                        <input type="text" value="1" class="form-control">
                                                                        <div class="input-group-append">
                                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-primary feather icon-refresh-cw" data-original-title="Refresh"> 
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">500.000</td>
                                                                <td class="text-right">1.000.000</td>
                                                                <td class="text-center">
                                                                    <div class="btn-group" role="group">
                                                                        <a class="feather icon-minus-circle btn btn-danger " href="#" title="" data-toggle="tooltip" data-original-title="Remove"></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                                <hr>
                                                <h3>Add Product(s)</h3>
                                                <hr>
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Choose Product</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control">
                                                        </div>
                                                      </div>
                                                      <hr>
                                                      <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Quantity</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" value="1">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-left col-md-6">
                                                <a class="btn btn-outline-dark feather icon-arrow-left" href="/orders/editorders"> Back</a>
                                            </div>
                                            <div class="text-right col-md-6">
                                                <button class="btn btn-primary feather icon-plus-circle" type="submit"> Add Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
