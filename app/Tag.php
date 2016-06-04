<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts() {
      return $this->belongsToMany('App\Post');

      // here are some convention from laravel normaly you specify all parameter here uncommented
      // return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }
}
