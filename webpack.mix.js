const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');



const path = "resources/backend/assets/";
mix.styles([
        path + "plugins/bootstrap/css/bootstrap.min.css",
        path + "plugins/charts-c3/c3.min.css",
        // path + "css/main.css",
        path + "css/theme1.css",
    ],
    "public/assets/css/main2.css");



mix.scripts([
    path + "bundles/lib.vendor.bundle.js",
    path + "bundles/selectize.bundle.js",
    path + "js/vendors/selectize.js",
    path + "bundles/apexcharts.bundle.js",
    path + "bundles/counterup.bundle.js",
    path + "bundles/knobjs.bundle.js",
    path + "bundles/c3.bundle.js",
    path + "js/page/project-index.js"
], 'public/assets/js/main.js');