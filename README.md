## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

## NGANGKOD-CRUD

This project is created during workshop called "Ngaji Koding" or "Ngangkod", held by HIMTI UNSIQ. The goals of this project is to teach about how to write simple CRUD apps with Laravel. You can find the detail of the outline materials of the workshop in this [gist](https://gist.github.com/ahmaruff/56be968d6415c2412626f94c37218de9)

## How to Setup This Project

- Copy this project to you local machine (use git clone, or download zip)
- Open this project directory in terminal/CMD
- run `composer install` to install all required dependencies
- you good to go!

## Some Basic Artisan Commands Used in This Simple Project

### Generate Model

`php artisan make:model <ModelName>`

- add flags `-m` after `<ModelName>` to automatically generate the related db migration file
- add flags `-c` after `<ModelName>` to automatically generate the Controller file
- add flags `-r` after `<ModelName>` to automatically generate the "resource controller" file
- you can combine all the three flags above such as `-mcr`

### Generate Controller

`php artisan make:controller <ControllerName>`


### Migration

- run migration: `php artisan migrate`
- rollback migration `php artisan migrate:rollback`

### Generate Seeder
`php artisan make:seeder <SeederName>`

run seeder: `php artisan db:seed <SeederName>`


### Run Server
`php artisan serve`


**You can find all the artisan commands [here](https://artisan.page/)**


Ahmad Ma'ruf &copy; 2023 
