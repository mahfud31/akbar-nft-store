<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::take(3)->latest()->get();
        $countProduct = Product::count();
        $categories = Category::count();

        return view('pages.admin.dashboard',[
            'products' => $products,
            'countProduct' => $countProduct,
            'categories' => $categories
        ]);
    }
}
