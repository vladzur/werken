@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <a href="{{ url('admin/tags') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Tags
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <h2>New Tag</h2>
            {!! Form::open(['url' => "admin/tags/{$tag->id}", 'method' => 'put']) !!}
            {!! csrf_field() !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', $tag->name, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <script type="text/javascript">

    </script>
@endsection