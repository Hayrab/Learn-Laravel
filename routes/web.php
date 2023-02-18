<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        'Name' => 'Haykal Rabani',
        'E-Mail' => 'mhaykalraban@gmail.com'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('post/{post:slug}', [PostController::class, 'show']); //untuk menggambil apapun dari slashnya

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog',[
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load("category","author")
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('blog',[
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load("category","author")
    ]);
});
