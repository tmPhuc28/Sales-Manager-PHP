<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public $user = null;

    public function index()
    {
        return Redirect::to('/admin/login');
    }

    public function catalogProducts()
    {
        $select = DB::select('select * from products');
        return View('admin.products.catalog_products', ['select' => $select]);
    }

    public function catalogCategory()
    {
        $select = DB::select('select * from categories');
        return view('admin.category.catalog_category')->with('select', $select);
    }

    public function catalogManufacture()
    {
        $select = DB::select('select * from manufacturers');
        return view('admin.manufacturer.catalog_manufacturer')->with('select', $select);
    }

    public function employee()
    {
        $select = DB::select('select * from employees');
        return view('admin.employee.employee')->with('select', $select);
    }

    public function account()
    {
        $select = DB::select('select * from accounts');
        return view('admin.account.employee_account', ['select' => $select]);
    }

    public function accountGroups()
    {
        $select = DB::select('select * from account_groups');
        return view('admin.account_groups.employee_account_groups', ['select' => $select]);
    }

    public function customers()
    {
        $select = DB::select('select * from customers');
        return view('admin.customers.customers', ['select' => $select]);
    }

    public function orders()
    {
        $select = DB::select('select * from bills');
        return view('admin.orders.sales_orders', ['select' => $select]);
    }

    public function blog()
    {
        $select = DB::select('select * from blogs');
        return view('admin.blog.blog', ['select' => $select]);
    }

    public function loginform()
    {
        return view('admin.login_admin');
    }
    public function login(Request $request)
    {
        $data = DB::table('accounts')->where('Username', $request->username)->where('Password', $request->password)->get();
        if (isset($data[0]->Username)) {
            return View('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }
}
