<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHandelController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::get('/products', [AdminController::class, 'catalogProducts']);

    Route::get('/category', [AdminController::class, 'catalogCategory']);

    Route::get('/manufacturer', [AdminController::class, 'catalogManufacture']);

    Route::get('/employee', [AdminController::class, 'employee']);

    Route::get('/account', [AdminController::class, 'account']);

    Route::get('/accountgroups', [AdminController::class, 'accountGroups']);

    Route::get('/customers', [AdminController::class, 'customers']);

    Route::get('/orders', [AdminController::class, 'orders']);

    Route::get('/blog', [AdminController::class, 'blog']);

    Route::get('/login', [AdminController::class, 'loginform']);

    Route::post('/login-account', [AdminController::class, 'login']);
});

//-----------Products--------------------------------------------------------------------
Route::prefix('/products')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'product']);

    Route::post('/add-product', [AdminHandelController::class, 'addProduct']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editProduct']);

    Route::post('/edit-product/{id}', [AdminHandelController::class, 'editPro']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteProduct']);
});

//-----------Category--------------------------------------------------------------------
Route::prefix('/admin/category')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'category']);

    Route::post('/add-category', [AdminHandelController::class, 'addCategory']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editCategory']);

    Route::post('/edit-category/{id}', [AdminHandelController::class, 'editCate']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteCategory']);
});

//-----------Category--------------------------------------------------------------------
Route::prefix('/admin/manufacturer')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'manufacturer']);

    Route::post('/add-manufacturer', [AdminHandelController::class, 'addmanufacturer']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editManufacturer']);

    Route::post('/edit-manufacturer/{id}', [AdminHandelController::class, 'editManu']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteManufacture']);
});

//-----------Employee--------------------------------------------------------------------
Route::prefix('/employee')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'employee']);

    Route::post('/add-employee', [AdminHandelController::class, 'addEmployee']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editEmployee']);

    Route::post('/edit-employee/{id}', [AdminHandelController::class, 'editEmp']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteEmployee']);
});

//-----------Account--------------------------------------------------------------------
Route::prefix('/account')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'account']);

    Route::post('/add-account', [AdminHandelController::class, 'addAccount']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editAccount']);

    Route::post('/edit-account/{id}', [AdminHandelController::class, 'editAcc']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteAccount']);
});

//-----------Account Groups--------------------------------------------------------------------
Route::prefix('/accountgroups')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'accountGroup']);

    Route::post('/add-accountgroups', [AdminHandelController::class, 'addAccountGroup']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editGroup']);

    Route::post('/edit-group/{id}', [AdminHandelController::class, 'editGr']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteGroup']);
});
//-----------Cunstomers--------------------------------------------------------------------
Route::prefix('/customers')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'customer']);

    Route::post('/add-customers', [AdminHandelController::class, 'addCustomer']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editCustomer']);

    Route::post('/edit-customer/{id}', [AdminHandelController::class, 'editCus']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteCustomer']);
});

//-----------Sales_Orders--------------------------------------------------------------------
Route::prefix('/orders')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'order']);

    Route::post('/add-orders', [AdminHandelController::class, 'addOrder']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editOrder']);

    Route::post('/edit-order/{id}', [AdminHandelController::class, 'editOrd']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteOrder']);

    Route::get('/detailorders', function () {
        return view('admin.orders.detail_orders');
    });
});

Route::get('/orders/addOrderProducts', function () {
    return view('admin.orders.add_order_products');
});

Route::get('/orders/editOrderProducts', function () {
    return view('admin.orders.edit_order_products');
});
//-----------Blog--------------------------------------------------------------------

Route::prefix('/blog')->group(function () {
    Route::get('/add', [AdminHandelController::class, 'blog']);

    Route::post('/add-blog', [AdminHandelController::class, 'addBlog']);

    Route::get('/edit/{id}', [AdminHandelController::class, 'editBlog']);

    Route::post('/edit-blog/{id}', [AdminHandelController::class, 'editBl']);

    Route::any('/delete/{id}', [AdminHandelController::class, 'deleteBlog']);
});

//-----------Login--------------------------------------------------------------------
