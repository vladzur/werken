@extends('blog')

@section('content')
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}<a href="#">{{ $post->user->name }}</a></p>
            @foreach($post->tags as $tag)
                <span class="label label-default">#{{ $tag->name }}</span>
            @endforeach
            <p>{!! Markdown::parse($post->content) !!}</p>
        </div>
@endsection