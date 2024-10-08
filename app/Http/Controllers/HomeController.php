<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        $products = Product::all();
        $product = $products[0];

        return view('home',[
            'product' => $product,
        ]);
    }
    //public function list()
    //{
        // FOR NOW JUST ONE PRODUC FROM THE LIST
       // $products = Product::all();
        //$product = $products[0];
        //return $product;
    //}
}
