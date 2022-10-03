<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class CartController extends Controller
{
    public function AddItem(Request $request)
    {
        $id = $request->Id;
        $quantity = $request->Quantity;

        $data = DB::table('products')->where('idProduct', $id)->get();

        return View('pages.cart');
    }
}
