<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function index()
    {
    $categories = Category::take(6)->get();
    $products = Product::with(['galleries'])->take(8)->get();
        return view('pages.home', [
            'categories'=>$categories,
            'products'=>$products
        ]);
    }
}
