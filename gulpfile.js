var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.scripts(
        [
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js'
        ],
        'public/js/app.js',
        'node_modules'
    )
        .scripts(
            [
                'bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js'
            ],
            'public/js/bootstrap3-wysihtml5.js',
            'bower_components'
        )
        .styles(
            [
                'admin.css'
            ],
            'public/css/admin.css'
        )
        .styles(
            [
                'blog.css'
            ],
            'public/css/blog.css'
        ).styles(
        [
            'login.css'
        ],
        'public/css/login.css'
    )
        .styles(
            [
                'bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css'
            ],
            'public/css/bootstrap3-wysihtml5.css',
            'bower_components'
        )
        .copy('node_modules/bootstrap/dist/fonts/', 'public/fonts/bootstrap/')
});