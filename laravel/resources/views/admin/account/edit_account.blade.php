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
                                    <h5 class="m-b-10">Account</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/admin/account">Account</a></li>
                                    <li class="breadcrumb-item"><a href="/account/editaccount">Edit Account</a></li>
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
                            <form action="{{ URL::to('/account/edit-account/'.$item->Username) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Edit Account</h5>
                                                <div class="float-right">
                                                    <button class="btn btn-primary feather icon-save" data-toggle="tooltip" data-original-title="Save" type="submit"></button>
                                                    <a class="btn btn-secondary feather icon-corner-down-left" data-toggle="tooltip" data-original-title="Return" href="/admin/account"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">User</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Username" value="{{ $item->Username }}" class="form-control" placeholder="User name">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" name="Password" value="{{ $item->Password }}" class="form-control" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">User Group</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="IdGroup" value="{{ $item->IdGroup }}" class="form-control" placeholder="IdGroup">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Employee Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="IdEmployee" value="{{ $item->IdEmployee }}" class="form-control" placeholder="IdEmployee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
