const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(mix => {

    // 构建 slicklab 依赖
    mix.styles(['slicklab/slidebars.css', 'slicklab/bootstrap.min.css',
        'slicklab/bootstrap-reset.css', 'slicklab/jquery-ui-1.10.3.css',
        'slicklab/font-awesome.css', 'slicklab/simple-line-icons.css',
        'slicklab/icomoon-weather.css', 'slicklab/default-theme.css',
        'slicklab/style.css', 'slicklab/style-responsive.css', 'slicklab/summernote.css'],
        'public/slicklab/css/slicklab.css');
    mix.scripts(['slicklab/jquery-1.10.2.min.js',
        'slicklab/bootstrap.js',
        'slicklab/vue.min.js',
        'plupload/js/plupload.full.min.js',
        'qiniu.min.js',
        'clipboard.min.js',
        'slicklab/jquery.nicescroll.js',
        'slicklab/slidebars.min.js',
        'slicklab/summernote/dist/summernote.min.js',
        'slicklab/scripts.js'],
        'public/slicklab/js/slicklab.js');

    //mix.scripts(['slicklab/select2.js', 'admin/template/elements.js'], 'public/js/admin/template/elements.js');
    //mix.styles(['slicklab/select2.css', 'slicklab/select2-bootstrap.css'], 'public/css/admin/template/elements.css');
    //
    //mix.sass('app.scss')
    //    .webpack('app.js');
});
