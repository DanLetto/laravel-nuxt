<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# LA-NU build 
(Laravel Framework 8.17.2 + Nuxt @ v2.14.10)

## Где пригодится?
На хостинге одна точка входа, 
но нужен api для приложения. и (не хочется / никак нельзя) 
создавать поддомен и/или покупать доп хостинг :)

##### Плюсы 
 - все сборки "отдельно" 
 
##### Минусы
 - это костыль!! для хостинга.

## Сборка

``
composer create-project --prefer-dist laravel/laravel <project-name-laravel>
``

``
cd <project-name-laravel>
``

``
npm init nuxt-app <project-name-nuxt>
``

``
cd <project-name-nuxt>
``

``
npm run install - если требуется
``

``
npm run generate
``

``
Копируем все из project-name-nuxt/dist в project-name-laravel/public
``

```
<project-name-laravel>/routes/web.php

Route::get('/', function () {
        return file_get_contents(public_path('index.html'));
});

```

Работает!
