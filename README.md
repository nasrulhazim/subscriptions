# Subscription Package for SaaS Applications

## Installation

```
composer require cleaniquecoders/subscriptions
```

## Register Service Provider

Open up `config/app.php` and register `CleaniqueCoders\Providers\SubscriptionServiceProvider::class,` in `providers` key.

## Trait

You may add `use CleaniqueCoders\Traits\Subscriptions\User as Subscription;` in your `User` model class to enable relationship between user and subscribed package.
