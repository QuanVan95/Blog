<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $fillable = [
        'title', 'animation_title', 'active', 'sub_title','category_id', 'content', 'position', 'post_date','image', 'gallery' ,'created_at', 'updated_at'
    ];
}
