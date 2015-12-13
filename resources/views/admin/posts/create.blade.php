@extends('../app')

@section('content')
    <h2>New Post</h2>
    {!! Form::open(['url' => 'admin/posts', 'method' => 'post']) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Content') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    <script type="text/javascript">
        var simplemde = new SimpleMDE({ element: $("#content")[0] });
    </script>
@endsection