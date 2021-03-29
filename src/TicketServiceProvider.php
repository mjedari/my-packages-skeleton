<?php

namespace Mjedari\Ticket;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->registerConfigPublishing();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ticket');

        $this->registerFacades();

    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerConfigPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('ticket.php'),
        ], 'ticket');
    }

    protected function registerFacades()
    {
        // Register the main class to use with the facade
        $this->app->singleton('Ticket', function () {
            return new Ticket;
        });
    }
}
