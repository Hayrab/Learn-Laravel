<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Posts(){
        return $this->hasMany(Post::class); //relasi antar table harus benar hasmany karena category mempunyai banyak post
    }
}
