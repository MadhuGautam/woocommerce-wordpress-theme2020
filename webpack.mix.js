const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    processCssUrls:false
}).js('node_modules/popper.js/dist/popper.js', 'assets/js').sourceMaps()
.js('src/js/app.js', 'assets/js')
    .sass('src/scss/app.scss', 'assets/css', [
        //
    ]);