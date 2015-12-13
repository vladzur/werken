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
    mix.sass('app.scss')
        .scripts(
        [
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js'
        ],
        'public/js/app.js',
        'bower_components'
    )
        .scripts(
            [
                'bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js'
            ],
            'public/js/bootstrap3-wysihtml5.js',
            'bower_components'
        )
        .scripts(
            [
                'datatables.net/js/jquery.dataTables.js',
                'datatables.net-bs/js/dataTables.bootstrap.js'
            ],
            'public/js/datatables.js',
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
        .styles(
            [
                'datatables.net-bs/css/dataTables.bootstrap.min.css'
            ],
            'public/css/datatables.css',
            'bower_components'
        )
        .copy('bower_components/bootstrap/dist/fonts/', 'public/fonts/bootstrap/')
});