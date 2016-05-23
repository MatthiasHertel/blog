<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // set the connection to the Category model
    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
