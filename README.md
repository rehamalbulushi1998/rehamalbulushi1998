
## About E-INK Blog

It is a blog where the users are enabled to share blogs related to literture.

## Getting started

### Dependencies

Since it is a standard laravel project, all dependencies required are listed in <code>composer.json</code>.

### Installing

The standard way of installing a Laravel application suffices

Clone the repository
```
git clone https://github.com/rehamalbulushi1998/rehamalbulushi1998
```

Go into the directory of the app and  install composer's dependencies

```
composer install
```

Copy <code>.env.example</code> to <code>.env</code> and make sure to set the application name, application url and database parameters.

Set the application key in your .env

```
php artisan key:generate
```

Migrate to create the tables

```
php artisan migrate
```

Install npm dependencies and compile assets

```
npm install && npm run dev
```
Note that if your application is working along with docker, then the php must be replaced with ./vendor/bin/sail while installing the app.

