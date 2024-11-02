<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //dump($products);

        return view('shop.products', compact(['products',]));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Product::class);

//dont forget enctype="multipart/form-data" cause of the file uploads
        $validated = $request->validate([
            'name' => 'required|max:50',
            'price' => 'required',
            'image' => 'required|max:500|file|image|mimes:jpg,bmp,png',
            //File::image()
            //->min(512)
            //->max(15 * 1024)
            //->dimensions(Rule::dimensions()->maxWidth(10000)->maxHeight(50000)),],
        ]);
        $image_path = $request->image->store('uploads/shop_img', 'public');
        //dd($image_path, $request->image);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = "storage/".$image_path;

        $product->save();

        return back();
    }

    public function edit(Product $product){

        //$this->authorize('update', Product::class);

        //$product->delete();

        return back();
    }
    public function update(Product $product){

        $data = request()->validate([
            'name' => 'required|max:50',
            'price' => 'required|max:50',
            'image' => 'sometimes|max:500|file|image|mimes:jpg,bmp,png',
        ]);

        if(request('image')){
            $image_path = request()->image->store('uploads/shop_img', 'public');
            $data['image'] = "storage/".$image_path;
        }


        //dd($data);
        $product->update($data);
        //dd($data);

        return back();
    }

    public function destroy(Product $product){

        $product->delete();

        return back();
    }
}
