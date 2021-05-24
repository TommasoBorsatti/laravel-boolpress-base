<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $guarded = [];
    public function posts()
    {
        return $this->hasMany('App\Comment');
    }
}

