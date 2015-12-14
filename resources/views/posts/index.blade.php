@extends('blog')

@section('content')

    @foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ url("articles/{$post->slug}") }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}<a href="#">{{ $post->user->name }}</a></p>
        <p>{!! Markdown::parse($post->content) !!}</p>
    </div>
    @endforeach

    {!! $posts->render() !!}

@endsection