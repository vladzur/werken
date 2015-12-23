@extends('blog')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ \Carbon\Carbon::parse($post->published_at)->toDayDateTimeString() }}
            <a href="#">{{ $post->user->name }}</a></p>
        @foreach($post->tags as $tag)
            <span class="label label-default">#{{ $tag->name }}</span>
        @endforeach
        <p>
        <div class="g-plus" data-action="share" data-annotation="bubble"
             data-href="{{ url("/posts/$post->slug") }}"></div>
        <a class="twitter-share-button"
           href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}">
            Tweet</a>
        </p>
        <p>{!! Markdown::parse($post->content) !!}</p>
    </div>
@endsection

@section('opengraph')
    <meta property="og:type" content="article"/>
    <meta itemprop="og:headline" content="{{ urlencode($post->title) }}"/>
    <meta itemprop="og:description" content="{!! str_limit(Markdown::parse($post->content), 200) !!}"/>
    <meta property="og:image" content=""/>
@endsection