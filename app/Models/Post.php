<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title','excerpt','body']; // membuat hanya yg didalam array yang boleh diise
    protected $guarded = ['id']; // membuat yg didalam array tidak bisa diisi, selain itu bisa
    protected $posts = ["author","category"];

    public function scopeFilter($query, array $filters)
    {   
        // if(isset($filters['search'])? $filters['search'] : false ) {
        //     return  $query  ->where('title', 'like', '%' . $filters['search']  . '%')
        //                     ->orWhere('body', 'like', '%'. $filters['search']  . '%');
        // }

        $query->when( $filters['search'] ?? false, function($query,$search){ // null coalesing operator berfungsi utk cek dahulu apakah filter berjaan
            return  $query  ->where('title', 'like', '%' . $search  . '%') // kalau tidak akan jalankan false
                            ->orWhere('body', 'like', '%'. $search  . '%'); // kalau ada filter akan diganti menjadi var 'search' dan 
        });

        $query->when( $filters['category'] ?? false, function($query,$category){
            return $query -> whereHas('category', function($query) use($category){
                    $query -> where('slug', $category);
            });
        });

        $query->when( $filters['author'] ?? false, function($query,$author){
            return $query -> whereHas('author', function($query) use($author){
                    $query -> where('username', $author);
            });
        });
    }

    

    public function Category()
    {
        return $this->belongsTo(Category::class); //relasi antar table harus benar belongsto karena 1 post mempunyai 1 category

    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


