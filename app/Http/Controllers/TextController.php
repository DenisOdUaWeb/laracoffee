<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function action (Request $request)
    {
        echo "Hi its action from TextController";
       dd($request->fname);
    }
}
