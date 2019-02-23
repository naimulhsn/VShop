<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        $products = Product::latest()->paginate(24); // fix product quantity
        
        return view('welcome', [
            'products' => $products
        ]);
    }

    public function view(Product $product)
    {
        return view('product.view', [
            'product' => $product
        ]);
    }

    public function create()
    {
        if(Auth::user()->id != 1)
            abort(403);
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name'        => $request->name,
            'price'       => $request->price,
            'discount'    => $request->discount,
            'description' => $request->description,
            'image'       => 'https://via.placeholder.com/150x200',
        ]);
        return back()->with('success', "Product {$product->name} has been created");
    }
}
