<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Tag;

class BlogController extends Controller
{
    public function getIndex() {
      $posts = Post::with('tags')->paginate(10);
      return view('blog.index')->withPosts($posts);

    }

    public function getSingle($slug) {
      // fetch from DB basedd on slug
      $post = Post::where('slug', '=' , $slug)->first();

      // return the view
      return view('blog.single')->withPost($post);
    }
}
