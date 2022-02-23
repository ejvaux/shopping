<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
    public function order()
    {
        if (!Session::has('cart')) {
            return redirect('/');
        } else {
            return view('order');
        }
    }
    public function paid()
    {
        return view('paid');
    }
}
