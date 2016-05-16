@extends('main')
@section('title', '| Contact')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
          <hr>
          <form class="" action="index.html" method="post">
              <div class="form-group">
                <label name="email">Email:</label>
                <input class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label name="subject">Thema:</label>
                <input class="form-control" name="subject" id="subject">
              </div>
              <div class="form-group">
                <label name="message">Nachricht:</label>
                <textarea class="form-control" name="message" id="message">Schreiben Sie ihre Nachricht hier ... </textarea>
              </div>
              <input type="submit" value="Sende Nachricht" class="btn btn-success">
          </form>
        </div>
      </div>
@endsection
