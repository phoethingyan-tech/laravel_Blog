<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function blog() 
    {
        $posts = Post::all();
        // var_dump($posts);
        return view('Front.blog',compact('posts'));
    }

    public function detail($id)
    {
        $post = Post::find($id);
        // var_dump($post);
        return view('Front.detail',compact('post'));
    }
}
