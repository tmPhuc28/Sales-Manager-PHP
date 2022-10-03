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
                                    <h5 class="m-b-10">Categories</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="/admin/category">Categories</a></li>
                                    <li class="breadcrumb-item"><a href="/category/addcategory">Add Category</a></li>
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
                                <form action="/admin/category/add-category" method="POST">
                                    {{ csrf_field() }}
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Category</h5>
                                            <div class="float-right">
                                                <button class="btn btn-primary feather icon-save" data-toggle="tooltip" data-original-title="Save" type="submit"></button>
                                                <a class="btn btn-secondary feather icon-corner-down-left" data-toggle="tooltip" data-original-title="Return" href="/admin/category"></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Category ID</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="idCategory" class="form-control" placeholder="Category ID">
                                                    </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="CategoryName" class="form-control" placeholder="Category Name">
                                                    </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="Img" class="form-control" placeholder="Category Name">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
