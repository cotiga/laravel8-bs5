# laravel8-bs5

<p>
    <img height="99" src="https://laravel.com/img/logomark.min.svg">
    <img height="99" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg">
</p>

## Laravel 8 with Bootstrap 5 and Auth (laravel-ui)

Pre-configured with languages packages (french language already imported)

## configuration

* .env.example is set to work with sqlite and MailHog

If you're using Valet and want to configure MailHog, see https://ryangjchandler.co.uk/posts/setup-mailhog-with-laravel-valet

## Installation

Clone the repository in your dev environment

* cd /my_dev_env/app/path
* cp .env.example .env
* touch database/database.sqlite
* composer install
* php artisan key:generate
* php artisan migrate
* npm install
* npx mix

## Packages added

* laravel-lang/lang
* laravel/ui
