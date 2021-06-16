# laravel8-bs5

<p>
    <img height="99" src="https://laravel.com/img/logomark.min.svg">
    <img height="99" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg">
</p>

## Laravel 8 with Bootstrap 5 and Auth (laravel-ui)

Pre-configured with *Laravel-Lang* (languages package)

__French imported and set__

To return to English, edit __config/app__ > __'locale' => 'en',__

For other languages, see https://github.com/Laravel-Lang/lang/blob/master/docs/index.md

## Configuration

*.env.cotiga* is set to work with *SQLite* and *MailHog*

If you're using *Valet* and want to configure *MailHog*, see https://ryangjchandler.co.uk/posts/setup-mailhog-with-laravel-valet

## Installation

Clone the repository in your dev environment

* cd /my_dev_env/app/path
* cp .env.cotiga .env
* touch database/database.sqlite
* composer install
* php artisan key:generate
* php artisan migrate
* npm install
* npx mix

## Composer packages added

* laravel-lang/lang
* laravel/ui

## NPM packages added

* @popperjs/core
* bootstrap
* resolve-url-loader
* sass
* sass-loader

## NPM packages removed

* axios
* lodash
* postcss
