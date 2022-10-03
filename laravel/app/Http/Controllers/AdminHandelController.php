<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountGroup;
use App\Models\Bill;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\User;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminHandelController extends Controller
{
    //---------------------------------------------
    // Category
    public function category()
    {
        return view('admin.category.add_category');
    }
    // Add category
    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->idCategory = $request->idCategory;
        $category->CategoryName = $request->CategoryName;
        $category->Imgs = $request->Img;

        $category->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/category');
    }
    // Edit category
    public function editCategory($id)
    {
        $data = DB::select('select * from categories where idCategory =' . $id);
        return view('admin.category.edit_category', ['data' => $data]);
    }
    public function editCate(Request $request, $id)
    {
        $data = array();
        $data['CategoryName'] = $request->CategoryName;
        $data['Imgs'] = $request->Imgs;

        DB::table('categories')->where('idCategory', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/category');
    }
    //Delete category
    public function deleteCategory($id)
    {
        DB::table('categories')->where('idCategory', $id)->delete();
        return Redirect::to('/admin/category');
    }

    //---------------------------------------------
    // Category
    public function manufacturer()
    {
        return view('admin.manufacturer.add_manufacturer');
    }
    // Add category
    public function addmanufacturer(Request $request)
    {
        $m = new Manufacturer();
        $m->idManufacturer = $request->idManufacturer;
        $m->ManufacturerName = $request->ManufacturerName;

        $m->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/manufacturer');
    }
    // Edit category
    public function editManufacturer($id)
    {
        $data = DB::select('select * from manufacturers where idmanufacturer =' . $id);
        return view('admin.manufacturer.edit_manufacturer', ['data' => $data]);
    }
    public function editManu(Request $request, $id)
    {
        $data = array();
        $data['ManufacturerName'] = $request->ManufacturerName;

        DB::table('manufacturers')->where('idManufacturer', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/manufacturer');
    }
    //Delete category
    public function deleteManufacture($id)
    {
        DB::table('manufacturers')->where('idmanufacturer', $id)->delete();
        return Redirect::to('/admin/manufacturer');
    }
    //---------------------------------------------
    //Product
    public function product()
    {
        return view('admin.products.add_products');
    }
    // Add Product
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->idProduct = $request->idProduct;
        $product->ProductName = $request->ProductName;
        $product->Price = $request->Price;
        $product->Img = $request->Img;
        $product->IdManufacturer = $request->IdManufacturer;
        $product->Description = $request->Description;
        $product->IdCategory = $request->IdCategory;

        $product->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/products');
    }
    // Edit product
    public function editProduct($id)
    {
        $data = DB::table('products')->where('idProduct', $id)->get();
        return view('admin.products.edit_products', ['data' => $data]);
    }

    public function editPro(Request $request, $id)
    {
        $data = array();
        $data['ProductName'] = $request->ProductName;
        $data['Price'] = $request->Price;
        $data['Description'] = $request->Description;
        $data['Img'] = $request->Img;
        $data['IdManufacturer'] = $request->IdManufacturer;
        $data['IdCategory'] = $request->IdCategory;

        DB::table('products')->where('idProduct', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/products');
    }
    // Delete product
    public function deleteProduct($id)
    {
        DB::table('products')->where('idProduct', $id)->delete();
        return Redirect::to('/admin/products');
    }
    //---------------------------------------------
    // Employee
    public function employee()
    {
        return view('admin.employee.add_employee');
    }
    // Add Employee
    public function addEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->idEmployee = $request->idEmployee;
        $employee->FullName = $request->FullName;
        $employee->DateOfBirth = $request->DateOfBirth;
        $employee->Sex = $request->Sex;
        $employee->Phone = $request->Phone;
        $employee->Address = $request->Address;
        $employee->Email = $request->Email;

        $employee->save();
        $request->session()->put('message', 'Seccessful!!!');
        return Redirect::to('/admin/employee');
    }
    // Edit Employee
    public function editEmployee($id)
    {
        $data = DB::select('select * from employees where idEmployee = ' . $id);
        return view('admin.employee.edit_employee', ['data' => $data]);
    }

    public function editEmp(Request $request, $id)
    {
        $data = array();
        $data['FullName'] = $request->FullName;
        $data['DateOfBirth'] = $request->DateOfBirth;
        $data['Sex'] = $request->Sex;
        $data['Address'] = $request->Address;
        $data['Phone'] = $request->Phone;
        $data['Email'] = $request->Email;

        DB::table('employees')->where('idEmployee', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/employee');
    }
    // Delete employee
    public function deleteEmployee($id)
    {
        DB::table('employees')->where('idEmployee', $id)->delete();
        return Redirect::to('/admin/employee');
    }
    //---------------------------------------------
    // Account Group
    public function accountGroup()
    {
        return view('admin.account_groups.add_account_groups');
    }
    // Add Account Group
    public function addAccountGroup(Request $request)
    {
        $accountGroup = new AccountGroup();
        $accountGroup->idGroup = $request->idGroup;
        $accountGroup->GroupName = $request->GroupName;

        $accountGroup->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/accountgroups');
    }
    // Edit Account Group
    public function editGroup($id)
    {
        $data = DB::table('account_groups')->where('idGroup', $id)->get();
        return View('admin.account_groups.edit_account_groups', ['data' => $data]);
    }
    public function editGr(Request $request, $id)
    {
        $data = array();
        $data['idGroup'] = $request->idGroup;
        $data['GroupName'] = $request->GroupName;

        DB::table('account_groups')->where('idGroup', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/accountgroups');
    }
    // Delete Account Group
    public function deleteGroup($id)
    {
        DB::table('account_groups')->where('idGroup', $id)->delete();
        return Redirect::to('/admin/accountgroups');
    }
    //---------------------------------------------
    // Account
    public function account()
    {
        return view('admin.account.add_account');
    }
    // Add Account
    public function addAccount(Request $request)
    {
        $account = new Account();
        $account->Username = $request->Username;
        $account->Password = $request->Password;
        $account->IdEmployee = $request->IdEmployee;
        $account->IdGroup = $request->IdGroup;

        $account->save();
        $request->session()->put('mesage', '');
        return Redirect::to('/admin/account');
    }
    // Edit Account
    public function editAccount($id)
    {
        $data = DB::table('accounts')->where('Username', $id)->get();
        return view('admin.account.edit_account', ['data' => $data]);
    }

    public function editAcc(Request $request, $id)
    {
        $data = array();
        $data['Password'] = $request->Password;
        $data['IdGroup'] = $request->IdGroup;
        $data['IdEmployee'] = $request->IdEmployee;

        DB::table('accounts')->where('Username', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/account');
    }
    // Delete Account
    public function deleteAccount($id)
    {
        DB::table('accounts')->where('Username', $id)->delete();
        return Redirect::to('/admin/account');
    }
    //---------------------------------------------
    // Customer
    public function customer()
    {
        return view('admin.customers.add_customers');
    }
    // Add customer
    public function addCustomer(Request $request)
    {
        $cs = new Customer();
        $cs->idCustomer = $request->idCustomer;
        $cs->FullName = $request->FullName;
        $cs->Phone = $request->Phone;
        $cs->Address = $request->Address;

        $cs->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/customers');
    }
    // Edit customer
    public function editCustomer($id)
    {
        $data = DB::table('customers')->where('idCustomer', $id)->get();
        return View('admin.customers.edit_customers', ['data' => $data]);
    }
    public function editCus(Request $request, $id)
    {
        $data = array();
        $data['FullName'] = $request->FullName;
        $data['Phone'] = $request->Phone;
        $data['Address'] = $request->Address;

        DB::table('customers')->where('idCustomer', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/customers');
    }
    // Delete customer
    public function deleteCustomer($id)
    {
        DB::table('customers')->where('idCustomer', $id)->delete();
        return Redirect::to('/admin/customers');
    }
    //---------------------------------------------
    // Blog
    public function blog()
    {
        return view('admin.blog.add_blog');
    }
    // Add Blog
    public function addBlog(Request $request)
    {
        $blog = new Blog();
        $blog->idBlog = $request->idBlog;
        $blog->Title = $request->Title;
        $blog->Content = $request->Content;
        $blog->IdProduct = $request->IdProduct;

        $blog->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/blog');
    }
    // Edit blog
    public function editBlog($id)
    {
        $data = DB::table('blogs')->where('idBlog', $id)->get();
        return view('admin.blog.edit_blog', ['data' => $data]);
    }
    public function editBl(Request $request, $id)
    {
        $data = array();
        $data['Title'] = $request->Title;
        $data['Content'] = $request->Content;
        $data['IdProduct'] = $request->IdProduct;

        DB::table('blogs')->where('idBlog', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/blog');
    }
    // Delete blog
    public function deleteBlog($id)
    {
        DB::table('blogs')->where('idBlog', $id)->delete();
        return Redirect::to('/admin/blog');
    }
    //---------------------------------------------
    // Order
    public function order()
    {
        return view('admin.orders.add_orders');
    }
    // Add Order
    public function addOrder(Request $request)
    {
        $bill = new Bill();
        $bill->idBill = $request->idBill;
        $bill->OrderDate = $request->OrderDate;
        $bill->Address = $request->Address;
        $bill->Total = $request->Total;
        $bill->IdCustomer = $request->IdCustomer;
        $bill->IdEmployee = $request->IdEmployee;

        $bill->save();
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/orders');
    }
    // Edit Order
    public function editOrder($id)
    {
        $data = DB::table('bills')->where('idBill', $id)->get();
        return View('admin.orders.edit_orders', ['data' => $data]);
    }
    public function editOrd(Request $request, $id)
    {
        $data = array();
        $data['OrderDate'] = $request->OrderDate;
        $data['Address'] = $request->Address;
        $data['Total'] = $request->Total;
        $data['IdCustomer'] = $request->IdCustomer;
        $data['IdEmployee'] = $request->IdEmployee;

        DB::table('bills')->where('idBill', $id)->update($data);
        $request->session()->put('message', 'Successful!!!');
        return Redirect::to('/admin/orders');
    }
    // Delete Order
    public function deleteOrder($id)
    {
        DB::table('bills')->where('idBill', $id)->delete();
        return Redirect::to('/admin/orders');
    }
    //---------------------------------------------
}
