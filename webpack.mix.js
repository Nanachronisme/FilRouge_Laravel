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
 mix.webpackConfig({
    stats: {
        hash: true,
        version: true,
        timings: true,
        children: true,
        errors: true,
        errorDetails: true,
        warnings: false,
        chunks: true,
        modules: false,
        reasons: true,
        source: true,
        publicPath: true,
    }
});

mix.disableNotifications();

mix.js('resources/js/app.js', 'public/js')
.js('node_modules/flowbite/dist/flowbite.js', 'public/js')
//.copy('node_modules/flowbite/dist/flowbite.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
