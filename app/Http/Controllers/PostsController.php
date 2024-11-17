<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
class PostsController extends Controller
{
    public function index()
    {
        $news = Post::all();
        //dump($products);

        return view('blog.news', compact(['news',]));
    }
    public function create()
    {
        //$news = Post::all();
        //dump($products);

        return view('blog.create');
    }

    public function store(Request $request)
    {
        //$this->authorize('create', Post::class);

//dont forget enctype="multipart/form-data" cause of the file uploads
        $validated = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'image' => 'required|max:500|file|image|mimes:jpg,bmp,png',
            'author' => 'required',

        ]);

        $image_path = $request->image->store('uploads/blog_img', 'public');
        //dd($image_path, $request->image);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = "storage/".$image_path;
        $post->author = $request->author;

        $post->save();

        return back();
    }

    public function edit(Post $post){

        $post = $post;
        return view('/blog/edit_post', compact(['post']));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'description' => 'required',
            'image' => 'sometimes|max:500|file|image|mimes:jpg,bmp,png',
        ]);

        if(request('image')){
            $image_path = request()->image->store('uploads/shop_img', 'public');
            $data['image'] = "storage/".$image_path;
        }

        $post->update($data);

        return back();
    }
}
