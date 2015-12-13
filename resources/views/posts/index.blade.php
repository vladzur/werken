@extends('blog')

@section('content')

    @foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}<a href="#">{{ $post->user->name }}</a></p>
        <p>{!! $post->content !!}</p>
    </div>
    @endforeach

@endsection