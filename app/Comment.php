<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   return $this->belongsTo('App\Post');
}
