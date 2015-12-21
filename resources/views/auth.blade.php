<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/login.css') !!}

            <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    {!! Html::script('js/werken.js') !!}
</head>

<body>

<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @yield('content')

</div>
<!-- /container -->


</body>
</html>