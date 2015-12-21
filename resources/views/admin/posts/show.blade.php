@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{ url('admin/posts') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Posts
            </a>
        </div>
        <div class="col-md-1">
            <a href="{{ url("admin/posts/{$post->id}/edit") }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-edit" aria-disabled="true"></span> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>View Post</h2>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->title }}</h3>
                </div>
                <div class="panel-body" id="body_text">
                    @foreach($post->tags as $tag)
                        <span class="label label-default">#{{ $tag->name }}</span>
                    @endforeach

                    {!! Markdown::parse($post->content) !!}
                </div>
            </div>
        </div>
    </div>
@endsection