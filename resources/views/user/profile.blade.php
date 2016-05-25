@extends('main')
@section('title', '| Profile')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="avatar-profile"/>
          <h2>{{ $user->name }}'s Profile Page</h2>
          {{ Form::open(array('files' => true)) }}
            {{ Form::label('avatar', 'Fileupload')}}
            {{ Form::file('avatar') }}
            {{ Form::submit('submit', ['class' => 'pull-right btn btn-primary'])}}
          {{ form::close() }}
        </div>
      </div>

@endsection
