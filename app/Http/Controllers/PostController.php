<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        //dd(request('Search')); mengecek apakah request sudah masuk
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' In ' . $category->name; // untuk memeberikan nilai dari author ke title dengan table yang row nama
        }
        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' By ' . $author->name; // untuk memeberikan nilai dari author ke title dengan table yang row nama
        }

        return view('blog', [
            "title" => "All Post" . $title,
            "active" => "blog",
            //"posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
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
