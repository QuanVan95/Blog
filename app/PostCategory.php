<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_categories';
    public $fillable = [
        'name', 'view', 'order', 'description', 'parent_id', 'url', 'image', 'meta_title', 'meta_keyword', 'meta_description', 'sub_name', 'active', 'deleted',
    ];
}
