<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| client/nuxt.config.js:
|--------------------------------------------------------------------------
  build: {
        publicPath: '/nuxt/'
    },
   router: {
    base: './static/',
        mode: 'history' or 'hash'
    }

|--------------------------------------------------------------------------
| config/filesystems.php:links
|--------------------------------------------------------------------------
'links' => [
    ...
    public_path('static') => base_path('client/dist'),
    ...
],

-----------------------------
return file_get_contents(public_path('/static/index.html'));
*/

Route::get('/', function () {
    // для ручного переноса в public
        return file_get_contents(public_path('index.html'));
});
