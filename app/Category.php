<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // set the name because category -> categories no convention
    protected $table = 'categories';

    // set the connection to the Post model
    public function posts()
    {
      return $this->hasMany('App\Post');
    }
}
