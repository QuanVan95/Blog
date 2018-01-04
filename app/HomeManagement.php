<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeManagement extends Model
{
    protected $table = 'home';
    public $fillable = [
        'title', 'logo', 'animation_title', 'sub_title', 'background_image', 'updated_at', 'created_at'
    ];
}
