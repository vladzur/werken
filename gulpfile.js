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
    mix.less('app.less')
        .scripts([
            'jquery/dist/jquery.js',
            'bootstrap/dist/js/bootstrap.js'
        ], 'public/js/werken.js', 'bower_components')
        .scripts([
            'jquery/dist/jquery.js',
            'bootstrap/dist/js/bootstrap.js',
            'simplemde/dist/simplemde.min.js',
            'datatables.net/js/jquery.dataTables.js',
            'datatables.net-bs/js/dataTables.bootstrap.js',
            'moment/moment.js',
            'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'
        ], 'public/js/admin.js', 'bower_components')
        .styles(['admin.css'], 'public/css/admin.css')
        .styles(['blog.css'], 'public/css/blog.css')
        .styles(['login.css'], 'public/css/login.css')
        .styles([
            'simplemde/dist/simplemde.min.css',
            'datatables.net-bs/css/dataTables.bootstrap.min.css',
            'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css'
        ], 'public/css/admin-vendor.css', 'bower_components')
        .copy('bower_components/bootstrap/dist/fonts/', 'public/fonts')
});