<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::all();
        dd($products);
    }
}
