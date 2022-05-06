<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //The update function still working without the following lines. [Weird!]
    //protected $fillable = ['title', 'post_text', 'category_id'];

}
