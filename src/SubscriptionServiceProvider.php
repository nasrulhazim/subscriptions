<?php

namespace CleaniqueCoders\Subscription;

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
            $this->loadMigrationsFrom(dirname(__FILE__) . '/database/migrations/');
        }

        $this->loadRoutesFrom(dirname(__FILE__) . '/routes/web.php');

        $this->loadViewsFrom(dirname(__FILE__) . '/resources/views', 'subscriptions');

        $this->publishes([
            dirname(__FILE__) . '/config' => config_path(),
        ], 'config');

        $this->publishes([
            dirname(__FILE__) . '/resources/views' => resource_path('views/vendor/subscriptions'),
        ], 'resources');

        $this->publishes([
            dirname(__FILE__) . '/public' => public_path(),
        ], 'public');

        $this->publishes([
            dirname(__FILE__) . '/database/seeds' => database_path('seeds'),
        ], 'seeder');
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
