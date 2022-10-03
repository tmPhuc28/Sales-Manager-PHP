@extends('admin.layout_admin')
@section('content_admin')

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php 
        $message = Session::get('message');
            if ($message){
                echo '<div class="alert alert-success alert-dismissible">';
                    echo'<i class="feather icon-check-circle">  </i>';
                    echo'<strong>'.$message.'</strong> You have modified orders!';
                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                    echo'<span aria-hidden="true">&times;</span>';
                    echo'</button>';
                    Session::put('message', null);
                echo '</div>';
            }
        ?>
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
                                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/orders">Orders</a></li>
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
                                        <h5>Orders List</h5>
                                        <div class="float-right">
                                            <a class="btn btn-primary feather icon-plus me-md-2" data-toggle="tooltip" data-original-title="Add" href="/orders/add" ></a>
                                          </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <form class="table-responsive">
                                            <table class="table table-hover table-bordered ">
                                                <thead>
                                                    <tr>
                                                        <th class="text-primary text-right">Order ID</th>
                                                        <th class="text-primary text-left">Order Day</th>
                                                        <th class="text-primary text-right">Address</th>
                                                        <th class="text-primary text-left">Total</th>
                                                        <th class="text-primary text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($select as $data)
                                                        <tr>
                                                            <th class="text-right" scope="row">{{ $data->idBill }}</th>
                                                            <td class="text-left">{{ $data->OrderDate }}</td>
                                                            <td class="text-right">{{ $data->Address }}</td>
                                                            <td class="text-left">{{ $data->Total }}</td>
                                                            <td class="text-center">
                                                                <div class="btn-group" role="group">
                                                                    <a class="feather icon-eye btn btn-primary " href="/orders/detailorders" title="" data-toggle="tooltip" data-original-title="View"></a>
                                                                    <a class="feather icon-edit-2 btn btn-info " href="/orders/edit/{{ $data->idBill }}" title="" data-toggle="tooltip" data-original-title="Edit"></a>
                                                                    <a class="feather icon-trash-2 btn btn-danger " href="/orders/delete/{{ $data->idBill }}" title="" data-toggle="tooltip" data-original-title="Delete"></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </form>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                              <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                </a>
                                              </li>
                                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                                              <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
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
