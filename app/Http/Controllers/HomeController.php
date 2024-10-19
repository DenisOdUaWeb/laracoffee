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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $product1 = $products[0];
        $product2 = $products[1];

        $showcase = Product::skip(2)->take(4)->get(); //orderBy('id','DESC')
        //dd($showcase);

        return view('home', compact(
            ['product1',
            'product2',
            'showcase',
        ]));
    }
    //public function list()
    //{
        // FOR NOW JUST ONE PRODUC FROM THE LIST
       // $products = Product::all();
        //$product = $products[0];
        //return $product;
    //}
}
