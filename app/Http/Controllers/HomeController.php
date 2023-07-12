<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {
        $products=Product::all();
        return view('welcome', compact('products'));
    }

    public function home()
    {
        $products=Product::all();
        return view('frontend.home', compact('products'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('frontend.shop.index', compact('products'));
    }

    public function show(Product $product)
    {
        $related_products = Product::where('id', "!=", $product->id)->limit(4)->get();
        return view('frontend.shop.detail', compact('product', 'related_products'));
    }

    public function checkout(Product $product){
        return view ('frontend.shop.checkout', compact('product'));
    }

}
