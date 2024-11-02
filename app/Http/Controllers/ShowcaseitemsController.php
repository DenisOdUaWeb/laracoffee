<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showcaseitem;

class ShowcaseitemsController extends Controller
{
    public function edit(Showcaseitem $showcaseitem){
        $showcaseitem = $showcaseitem;
        return view('showcase.edit', compact([
            'showcaseitem',
        ]));
    }
    public function update(Showcaseitem $showcaseitem){

        //$this->authorize('update', Showcaseitem::class);


        $data = request()->validate([
            'name' => 'required|max:50',
            'price' => 'required|max:50',
            'image' => 'sometimes|max:500|file|image|mimes:jpg,bmp,png',
        ]);

        if(request('image')){
            $image_path = request()->image->store('uploads/shop_img', 'public');
            $data['image'] = "storage/".$image_path;
        }

        $showcaseitem->update($data);

        return redirect('/');
    }
}
