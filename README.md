<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sử dụng thư viện có sẵn

- [nwidart/laravel-modules](https://nwidart.com/laravel-modules/v6/introduction).

## Tự cấu hình module tùy chỉnh

app/<br/>
Modules<br/>
.|__Basic<br/>
......|___Controllers<br/>
.............|___BasicController.php<br/>
......|___Migrations<br/>
.............|___BasicMigrate.php<br/>
......|___Models<br/>
.............|___Basic.php<br/>
......|___Views<br/>
.............|___index.blade.php<br/>
......|___Routers<br/>
.............|___web.php<br/>
.............|___api.php<br/>
......|___ModuleBasicProvider.php

- Thêm vào file composer.json
```php
"autoload": {
        "psr-4": {
            ...
            "Modules\\": "app/Modules/"
        }
},
```
- Chạy lệnh composer
```bash
composer dump-autoload
```
- Thêm vào file config/app.php
```php
'providers' => [
    ...
    Modules\Basic\ModuleBasicProvider::class
]
```
- Link demo http://localhost:8000/basic
- Link demo http://localhost:8000/api/basic

