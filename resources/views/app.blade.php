<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Werken Blog Manager</title>
    <!-- CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/admin.css') !!}
    {!! Html::style('css/simplemde.css') !!}
    {!! Html::style('css/datatables.css') !!}

    <!-- Scripts -->
    {!! Html::script('js/app.js') !!}
    {!! Html::script('js/datatables.js') !!}
    {!! Html::script('js/simplemde.js') !!}

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/agate.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! url('admin/dashboard') !!}">Werken Blog Manager</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li {!! Request::is('admin/dashboard*') ? 'class="active"' : '' !!}}>
                    <a href="{!! url('admin/dashboard') !!}">Home</a>
                </li>
                <li {!! Request::is('admin/posts*') ? 'class="active"' : '' !!}}>
                    <a href="{!! url('admin/posts') !!}">Posts</a>
                </li>
                <li {!! Request::is('admin/tags*') ? 'class="active"' : '' !!}}>
                    <a href="{!! url('admin/tags') !!}">Tags</a>
                </li>
                <li {!! Request::is('admin/users*') ? 'class="active"' : '' !!}}>
                    <a href="{!! url('admin/users') !!}">Users</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">{{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a href="{!! url('auth/logout') !!}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="container">
    @yield('content')
</div>
<script type="application/javascript">
    $(document).ready(function() {
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
</body>
</html>
