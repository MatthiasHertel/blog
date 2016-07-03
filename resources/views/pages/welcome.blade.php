@extends('main')
@section('title', '| Homepage')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Willkommen zu meinem Blog!</h1>
            <p class="lead">Hier entsteht mein Blog - Mit der Bearbeitung des Faches Internet Server Programmierung SS 2016</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
          </div>
        </div>
      </div> <!-- end of header .row -->
      <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
              <h3>{{ $post->title }}</h3>
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
                {{ substr($post->introduction, 0, 300) }} {{ strlen($post->introduction) > 300 ? "..." : "" }}
              </p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>

      </div><!-- end of content .row -->


@endsection
