<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $post = new \App\Models\Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = "storage/".$image_path;
        $post->author = $request->author;

        $post->save();

        return back();
    }
}
