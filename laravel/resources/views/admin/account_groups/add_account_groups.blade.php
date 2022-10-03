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
                                    <h5 class="m-b-10">Account Groups</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/admin/accountgroups">Account Groups</a></li>
                                    <li class="breadcrumb-item"><a href="/accountgroups/addaccountgroups">Add Account Groups</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <form action="/accountgroups/add-accountgroups" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Account Groups</h5>
                                            <div class="float-right">
                                                <button class="btn btn-primary feather icon-save" data-toggle="tooltip" data-original-title="Save" type="submit"></button>
                                                <a class="btn btn-secondary feather icon-corner-down-left" data-toggle="tooltip" data-original-title="Return" href="/admin/accountgroups"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Account Groups ID</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="idGroup" class="form-control" placeholder="Account Groups ID">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Account Groups Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="GroupName" class="form-control" placeholder="Account Groups Name">
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
