<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $product = Product::where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'product' => $product
        ]);
    }
}

// with(['categories'])->
