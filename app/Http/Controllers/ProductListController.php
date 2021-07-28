<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // 不知為何加
use App\Models\Product;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        dd($product->toarray());
        // echo $product;
        return view('product_list', ['product' => $product]);
        // return Product::all();
    }
}
