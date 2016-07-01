@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

      {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
      {{ Form::text('slug', null, ['class' => 'form-control']) }}

      {{ Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) }}
      {{ Form::select('category_id', $categories, null, ['class' => 'form-control'] ) }}

      {{ Form::label('introduction', 'introduction:', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('introduction', null, ['class' => 'form-control']) }}

      {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class' => 'form-control post-body']) }}

    </div>
    <div class="col-md-4">
      <div class="well">

          <dl class="dl-horizontal">
            <dt>Created At: </dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Last Updated: </dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
            </div>
            <div class="col-sm-6">
              {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
            </div>
          </div>

      </div>
    </div>
    {!! Form::close() !!}
  </div> <!-- end of .row form -->

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
  {!! Html::script('js/tinymce/tinymce.min.js') !!}
  <script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea.post-body",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
    tinymce.init(editor_config);
  </script>

@endsection
