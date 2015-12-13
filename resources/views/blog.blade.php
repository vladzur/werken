<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <!-- CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/blog.css') !!}
    <!-- Scripts -->
    {!! Html::script('js/app.js') !!}
</head>

<body>

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
        <h1 class="blog-title">Werken Blog</h1>
        <p class="lead blog-description">The most important blog in the world.</p>
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
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a
                href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
</body>
</html>
