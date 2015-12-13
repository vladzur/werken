@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <a href="{{ url('admin/posts') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Posts
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <h2>Edit Post</h2>
            {!! Form::open(['url' => "admin/posts/{$post->id}", 'method' => 'put']) !!}
            {!! csrf_field() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content') !!}
                {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <script type="text/javascript">
        var simplemde = new SimpleMDE({element: $("#content")[0]});
    </script>
@endsection