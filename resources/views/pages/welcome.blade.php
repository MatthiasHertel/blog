@extends('main')
@section('title', '| Homepage')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Willkommen zu meinem Blog!</h1>
            <p class="lead">Vielen Dank für ihren Besuch. Das ist mein Test Blog mit dem Laravel Framework</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
          </div>
        </div>
      </div> <!-- end of header .row -->
      <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>
                {{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : "" }}
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>

      </div><!-- end of content .row -->


@endsection
