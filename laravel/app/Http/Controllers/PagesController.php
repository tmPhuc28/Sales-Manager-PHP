<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function Index()
    {
        $data = DB::select('select * from products');
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        return view('pages.index', ['data' => $data, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function Products()
    {
        $data = DB::select('select * from products');
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        return view('pages.products', ['data' => $data, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function Category($id)
    {
        $data = DB::table('products')->where('IdCategory', $id)->get();
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        return view('pages.category_product', ['data' => $data, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function Manufacturer($id)
    {
        $data = DB::table('products')->where('IdManufacturer', $id)->get();
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        return view('pages.category_product', ['data' => $data, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function ProductDetail($id)
    {
        $data = DB::table('products')->where('idProduct', $id)->first();
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        $dataCate = DB::select('SELECT * FROM `categories`, `products` WHERE `products`.idProduct = `categories`.idCategory and `products`.IdCategory = ' . $data->IdCategory);
        return view('pages.product_detail', [
            'data' => $data,
            'dataCate' => $dataCate,
            'category' => $category,
            'manufacturers' => $manufacturers
        ]);
    }

    public function Checkout()
    {
        return view('pages.checkout');
    }

    public function Contact()
    {
        return view('pages.contact');
    }

    public function About()
    {
        return view('pages.about');
    }

    public function Blog()
    {
        $category = DB::table('categories')->get();
        $manufacturers = DB::table('manufacturers')->get();
        $data = DB::select('SELECT * FROM `blogs`, `products` WHERE `blogs`.`IdProduct` = `products`.`idProduct`');
        return view('pages.blog', ['data' => $data, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function BlogDetail($id)
    {
        $category = DB::table('categories')->get();
        $dataBlog = DB::select('SELECT `idBlog`, `Title`, `Content`, `Img`, `blogs`.`created_at`, `ProductName` FROM `products`, `blogs` WHERE `blogs`.`IdProduct` = `products`.`idProduct` AND `idBlog` = ' . $id);
        $manufacturers = DB::table('manufacturers')->get();
        // dd($dataBlog);
        return view('pages.blog_detail', ['dataBlog' => $dataBlog, 'category' => $category, 'manufacturers' => $manufacturers]);
    }

    public function Login()
    {
        return view('pages.login');
    }
}
