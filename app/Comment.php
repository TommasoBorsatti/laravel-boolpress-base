<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     //Mass Assignement
    protected $guarded = [];

     //Funzione per relazione con Post
    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
