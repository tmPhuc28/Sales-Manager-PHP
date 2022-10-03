<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [PagesController::class, 'Index']);

Route::get('/products', [PagesController::class, 'Products']);

Route::get('/product-detail/{id}', [PagesController::class, 'ProductDetail']);

Route::get('/category/{id}', [PagesController::class, 'Category']);

Route::get('/manufacturer/{id}', [PagesController::class, 'Manufacturer']);

Route::prefix('/cart')->group(function () {
    Route::post('/add', [CartController::class, 'AddItem']);
});

Route::get('/checkout', [PagesController::class, 'Checkout']);

Route::get('/contact', [PagesController::class, 'Contact']);

Route::get('/blog', [PagesController::class, 'Blog']);

Route::get('/blog-detail/{id}', [PagesController::class, 'BlogDetail']);

Route::get('/login', [PagesController::class, 'Login']);
