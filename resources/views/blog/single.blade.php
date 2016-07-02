@extends('main')

@section('title', "| $post->title")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>{{ $post->title }}</h1>
      <h5>Tags:</h5>
      <p>
        @forelse($post->tags as $tag)
            <a class="label label-info" rel="tooltip" href="/post/tagged/TODO-slugurl" data-original-title="Post tagged with: {{ $tag->name }}">{{ $tag->name }}</a>
        @empty
            <p>No tags found for this photo</p>
        @endforelse
      </p>
      <h5>Introduction:</h5>
      <p>
        {{ $post->introduction }}
      </p>
      <h5>Blog Post:</h5>
      <p>
        {!! $post->body !!}
      </p>
      <hr>
      <p>
        Posted In: {{ $post->category->name }}
      </p>
    </div>
  </div>

@endsection
