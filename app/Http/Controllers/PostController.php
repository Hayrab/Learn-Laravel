<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "All Post",
            "active" => "blog",
            //"posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post) //mengikat model post dari fitur post model binding
    {
        return view('post', [
            "title" => "single post",
            "active" => "blog",
            "post"  => $post // tidak perlu mencari id, lansung saja post 
        ]);
    }
}
