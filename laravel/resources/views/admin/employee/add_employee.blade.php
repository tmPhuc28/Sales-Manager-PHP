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
                                    <h5 class="m-b-10">Employee</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/admin/employee">Employee</a></li>
                                    <li class="breadcrumb-item"><a href="/employee/addemployee">Add Employee</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <form action="/employee/add-employee" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Employee</h5>
                                            <div class="float-right">
                                                <button class="btn btn-primary feather icon-save" data-toggle="tooltip" data-original-title="Save" type="submit"></button>
                                                <a class="btn btn-secondary feather icon-corner-down-left" data-toggle="tooltip" data-original-title="Return" href="/admin/employee"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Employee ID</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="idEmployee" class="form-control" placeholder="Employee ID">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Employee Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="FullName" class="form-control" placeholder="Employee Name">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Birthday</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" name="DateOfBirth" class="form-control" placeholder="Birthday">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="Address" class="form-control" placeholder="Address">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Sex</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="Sex">
                                                                <option value="Nam">Nam</option>
                                                                <option value="Nữ">Nữ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Phone Number</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="Phone" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" name="Email" class="form-control" placeholder="email@gmail.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
