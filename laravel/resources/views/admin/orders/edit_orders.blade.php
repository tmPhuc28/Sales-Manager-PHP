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
                                    <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/admin/orders">Orders</a></li>
                                    <li class="breadcrumb-item"><a href="/orders/editorders">Edit Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        @foreach ($data as $item)
                            <form action="{{ URL::to('/orders/edit-order/'.$item->idBill) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Edit Orders</h5>
                                                <div class="float-right">
                                                    <a class="btn btn-secondary feather icon-corner-up-left" data-toggle="tooltip" data-original-title="Cancel" href="/admin/orders"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Orders ID</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="idBill" value="{{ $item->idBill }}" class="form-control" placeholder="Orders ID">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Order Day</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" name="OrderDate" value="{{ $item->OrderDate }}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Address" value="{{ $item->Address }}" class="form-control" placeholder="Address Order">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Total</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Total" value="{{ $item->Total }}" class="form-control" placeholder="Total">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Customer</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="IdCustomer" value="{{ $item->IdCustomer }}" class="form-control" placeholder="Customer">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Employee</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="IdEmployee" value="{{ $item->IdEmployee }}" class="form-control" placeholder="Employee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary feather icon-arrow-right" href="/orders/editOrderProducts"> Continue</a>
                                </div>
                            </form>
                        @endforeach
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
