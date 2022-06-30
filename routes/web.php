<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "blog",
        "posts" => Post::all()
    ]);
});

// halaman single post
Route::get('post/{slug}', function($slug){ //untuk menggambil apapun dari slashnya


    return view('post', [
        "title" => "single post",
        "post"  => Post::find($slug) // :: menandakan berjenis static
    ]);
});

