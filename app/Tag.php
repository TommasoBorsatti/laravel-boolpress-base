<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Mass Assignement
    protected $guarded = [] ;

    //Funzione per relazioni con Post
    public function posts()
    {
        return $this->belongsToMany('App\Post') ;
    }
}
