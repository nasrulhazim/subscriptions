<?php

namespace CleaniqueCoders\Subscription\Providers;

use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(dirname(dirname(__FILE__)) . '/database/migrations/');
        }

        $this->loadRoutesFrom(dirname(dirname(__FILE__)) . '/routes/web.php');

        $this->loadViewsFrom(dirname(dirname(__FILE__)) . '/resources/views', 'subscriptions');

        $this->publishes([
            dirname(dirname(__FILE__)) . '/config/subscription.php' => config_path('subscription.php'),
        ], 'config');

        $this->publishes([
            dirname(dirname(__FILE__)) . '/resources/views' => resource_path('views/vendor/subscriptions'),
        ], 'resources');

        $this->publishes([
            dirname(dirname(__FILE__)) . '/public' => public_path(),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
