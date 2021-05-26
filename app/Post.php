<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    //Mass Assignement
    protected $guarded = [];

    //Funzione per relazione con Comments
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    //Funzione per relazione con Tags
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

