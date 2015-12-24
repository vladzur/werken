<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('opengraph')

    <link rel="icon" href="../../favicon.ico">

    <title>{{ $configuration->blog_title }}</title>
    <!-- CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/blog.css') !!}
    <!-- Scripts -->
    {!! Html::script('js/werken.js') !!}
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/agate.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ url('/rss') }}" />
</head>

<body>
<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));</script>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="{{ url('/') }}">Home</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">{{ $configuration->blog_title }}</h1>
        <p class="lead blog-description">{{ $configuration->blog_description }}</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            @yield('content')

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Piensa...</h4>
                <p>¿Por qué esta magnífica tecnología científica, que ahorra trabajo y nos hace la vida mas fácil, nos aporta tan poca felicidad?
                    La repuesta es esta, simplemente: porque aún no hemos aprendido a usarla con tino.</p>
                <p><i>Albert Einstein</i></p>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>
       {!! $configuration->blog_footer !!}
    <p>
        <a href="#">Back to top</a> | <a href="{{ url('/rss') }}">RSS</a>
    </p>
</footer>
<script type="application/javascript">
    $(document).ready(function() {
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
{!! $configuration->analytics !!}
</body>
</html>
