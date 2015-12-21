@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form role="form" action="{{ url("admin/configurations/{$configuration->id}") }}" method="post">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('blog_title', 'Title') !!}
                    {!! Form::text('blog_title', $configuration->blog_title, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('blog_description', 'Description') !!}
                    {!! Form::text('blog_description', $configuration->blog_description, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('blog_footer', 'Footer') !!}
                    {!! Form::text('blog_footer', $configuration->blog_footer, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('analytics', 'Google Analytics') !!}
                    {!! Form::textarea('analytics', $configuration->analytics, ['class' => 'form-control']) !!}
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection