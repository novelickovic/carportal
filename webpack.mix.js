//let mix = require('laravel-mix');

let mix = require('laravel-mix').mix;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts(['resources/assets/custom/js/modernizr.min.js',
    'resources/assets/custom/js/jquery.min.js',
    'resources/assets/custom/js/moment.min.js',
    'resources/assets/custom/js/popper.min.js',
    'resources/assets/custom/js/bootstrap.min.js',
    'resources/assets/custom/js/detect.js',
    'resources/assets/custom/js/fastclick.js',
    'resources/assets/custom/js/jquery.blockUI.js',
    'resources/assets/custom/js/jquery.nicescroll.js',
    'resources/assets/custom/js/pikeadmin.js'
], 'public/js/all.js');

mix.scripts(['resources/assets/custom/plugins/waypoints/lib/jquery.waypoints.min.js',
    'resources/assets/custom/plugins/counterup/jquery.counterup.min.js',
    'resources/assets/custom/plugins/trumbowyg/trumbowyg.min.js',
    'resources/assets/custom/plugins/trumbowyg/plugins/upload/trumbowyg.upload.js'
], 'public/js/admin.js');
mix.styles(['resources/assets/custom/plugins/trumbowyg/ui/trumbowyg.min.css'
], 'public/css/admin.css');
mix.styles(['resources/assets/custom/css/bootstrap.min.css',
    'resources/assets/custom/font-awesome/css/font-awesome.min.css',
    'resources/assets/custom/css/style.css'
], 'public/css/all.css');
