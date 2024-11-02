<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\showcaseitem;
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
        $showcaseitems = Showcaseitem::all();
        $showcaseitem1 = $showcaseitems[0];
        $showcaseitem2 = $showcaseitems[1];

        $showcase = Showcaseitem::skip(2)->take(4)->get(); //orderBy('id','DESC')
        //dd($showcase);

        return view('home', compact(
            ['showcaseitem1',
            'showcaseitem2',
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
