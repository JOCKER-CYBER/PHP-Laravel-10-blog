# Laravel 10 Blog
This is Laravel 10 blog with Filament PHP (https://filamentphp.com/) admin panel.

This blog was built on behalf of wabnev, you are free to use this application as you wish.

# Installation with xammp

Please ensure your xammp has the following prerequisite: php version 8.1.17

# Clone the project
```bash
git clone https://github.com/thejocker/laravel-10-blog.git
```

# Run `composer install`
Navigate into project folder using terminal and run

# Start the project

```bash
php artisan serve
```
An error will occur of cause, now here is how to solve it.

# Run migrations

```bash
php artisan migrate
```

# Add Filament Admin user

```bash
php artisan make:filament-user
```


# 5. Set encryption key

```bash
php artisan key:generate --ansi
```


# Problems

If you encounter problems, please comment and let us know...
