<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // set the connection to the Category model 1:1
    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    // set the connection to the Tag model m:n
    public function tags() {
      return $this->belongsToMany('App\Tag');
    }
}
