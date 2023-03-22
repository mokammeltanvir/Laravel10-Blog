# Laravel10 Blog Website

This is Laravel10 Blog website project with [Filament PHP](https://filamentphp.com/) admin panel.

## Tech Stack

**FrontEnd:** HTML, CSS, TailwindCSS, AlpineJS.

**BackEnd:** PHP, LARAVEL10, MySQL

## Run Locally

1. In your root folder, clone the project file using git clone https://github.com/mokammeltanvir/Laravel10-Blog.git

2. Open terminal (bash/cmd). Then go to project folder using command

```bash
  cd Laravel10-Blog
```

3. Then install required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate key for this project using command

```sh
cp .env.example .env

php artisan key:generate
```

5. Run migrations

```sh
php artisan migrate
```

6. Add Filament Admin user

```sh
php artisan make:filament-user
```

7. Use this command for Database Seeding for demo blog data import(Optional)

```sh
php artisan db:seed
```

8. Great 😊 now run

```sh
php artisan serve
```

## Demo

Insert gif or link to demo

## Authors

-   [@mokammeltanvir](https://www.github.com/mokammeltanvir)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
