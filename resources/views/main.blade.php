<!DOCTYPE html>
<html lang="en">
  <head>
      @include('partials._head')
  </head>

  <body>

    @include('partials._nav')

    <div class="container">

      @include('partials._messages')

      {{ Auth::check() ? "Logged in" : "Logged out"}}
      
      @yield('content')

      @include('partials._footer')

    </div> <!-- end of .container -->

    @include('partials._javascripts')

    @yield('scripts')
  </body>
</html>
