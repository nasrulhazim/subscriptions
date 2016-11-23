<?php

namespace CleaniqueCoders\Providers;

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

        $this->loadRoutesFrom(dirname(dirname(__FILE__)) .'/routes/web.php');

        $this->loadViewsFrom(dirname(dirname(__FILE__)) . '/resources/views', 'subscriptions');

        $this->publishes([
            dirname(dirname(__FILE__)) . '/config/subscription.php' => config_path('subscription.php'),
            dirname(dirname(__FILE__)) . '/resources/views', 'subscriptions') => resource_path('views/vendor/subscriptions')),
            dirname(dirname(__FILE__)) .'/public' => public_path(),
        ]);
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
