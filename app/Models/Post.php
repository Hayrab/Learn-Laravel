<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title','excerpt','body']; // membuat hanya yg didalam array yang boleh diise
    protected $guarded = ['id']; // membuat yg didalam array tidak bisa diisi, selain itu bisa
}
