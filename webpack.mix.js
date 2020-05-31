const mix = require('laravel-mix');



mix.js('resources/js/bootstrap.js', 'public/js/bootstrap.js')
mix.js('resources/js/threads/app.js', 'public/js/threads.js')
mix.js('resources/js/replies/app.js', 'public/js/replies.js')
    .sass('resources/sass/app.scss', 'public/css')
    .extract(['vue']);