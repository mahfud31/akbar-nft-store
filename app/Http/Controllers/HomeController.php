<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(6)->inRandomOrder()->get();
        $products = Product::take(12)->latest()->get();
        return view('pages.home',[
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
