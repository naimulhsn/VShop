<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function adminOrderList()
    {
        if(Auth::user()->id != 1)
            abort(403);
        return view('product.create');
    }
    public function userOrderList()
    {
        return view('product.create');
    }
}
