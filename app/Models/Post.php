<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bani",
            "body" => "Lorem ipsum dolor sit, amet consectetur 
            adipisicing elit. Consectetur, minus exercitationem 
            culpa dolor aperiam vero magnam consequatur cupiditate! 
            Dolorem temporibus unde sequi molestiae sint quasi autem 
            corrupti minus, vero laboriosam."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bani",
            "body" => "Lorem ipsum dolor sit, amet consectetur 
            adipisicing elit. Consectetur, minus exercitationem 
            culpa dolor aperiam vero magnam consequatur cupiditate! 
            Dolorem temporibus unde sequi molestiae sint quasi autem 
            corrupti minus, vero laboriosam."
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts); //membuat fungsi all untuk menjadi method, memakai self karena static, jika this karena property biasa
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug',$slug);
    }

}
