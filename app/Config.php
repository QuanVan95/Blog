<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';
    public $fillable = ['name',
        'key_config', 'value1', 'value2', 'active'
    ];
}
