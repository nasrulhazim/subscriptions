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

### Register Routes

As for now, there's a bit problem with routing but you can copy and paste the following routes into your `routes/web.php`

```php
Route::get('subscribe/{id}', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@subscribe')->name('subscriptions.subscribe');
Route::get('unsubscribed', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@unsubscribed')->name('subscriptions.unsubscribed');

// must be logged in
Route::group(['middleware' => ['auth']], function () {
    Route::get('expired', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@expired')->name('subscriptions.expired');
});

Route::group(['middleware' => ['auth', 'subscription']], function () {
    Route::resource('subscriptions', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController');
});
```

### Migration

Run `php artisan migrate` to create tables used in this package.

## Trait

You may add `use CleaniqueCoders\Traits\Subscriptions\User as Subscription;` in your `User` model class to enable relationship between user and subscribed package.
