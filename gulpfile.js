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
    mix.styles(['slicklab/slidebars.css', 'slicklab/bootstrap.min.css',
        'slicklab/bootstrap-reset.css', 'slicklab/jquery-ui-1.10.3.css',
        'slicklab/font-awesome.css', 'slicklab/simple-line-icons.css', 'slicklab/icomoon-weather.css', 'slicklab/default-theme.css',
        'slicklab/style.css', 'slicklab/style-responsive.css'], 'public/css/admin/vendor.css');

    mix.scripts(['slicklab/jquery-1.10.2.min.js',
        'slicklab/bootstrap.js', 'slicklab/vue.min.js',
        'slicklab/jquery.nicescroll.js', 'slicklab/slidebars.min.js',
        'slicklab/scripts.js'],
        'public/js/admin/vendor.js');
});
