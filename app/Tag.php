<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function posts() {
      return $this->belongsToMany('App\Post');

      // here are some convention from laravel normaly you specify all parameter here uncommented
      // return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }

    public static function createAndReturnArrayOfTagIds($string, $delimiter = ',')
    {
        $tagsArray = explode($delimiter, $string);

        $ids = [];

        foreach ($tagsArray as $tag) {

            $tag = trim($tag);
            $theTag = \App\Tag::firstOrCreate(['name' => $tag]);

            array_push($ids, $theTag->id);
        }

        return $ids;
    }
}
