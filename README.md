# Subscription Package for SaaS Applications

## Installation

```
composer require cleaniquecoders/subscriptions
```

## Register Service Provider

Open up `config/app.php` and add the following in `providers` key:

```php
CleaniqueCoders\Subscription\SubscriptionServiceProvider::class,
```

## Register Subscription Middleware

Open up `app/Http/Kernel.php` and add the following in `$routeMiddleware`:

```php
'subscription' => \CleaniqueCoders\Subscription\Http\Middleware\Subscription::class,
```

### Migration

Run `php artisan migrate` to create tables used in this package.

## Trait

You may add `use CleaniqueCoders\Traits\Subscriptions\User as Subscription;` in your `User` model class to enable relationship between user and subscribed package.
