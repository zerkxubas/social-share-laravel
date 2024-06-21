<?php

namespace Zerkxubas\SocialShareLaravel;

use Illuminate\Support\ServiceProvider;

class SocialShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishes the configuration file
        $this->publishes([
            __DIR__.'/../../config/socialshare.php' => config_path('socialshare.php'),
        ], 'socialshare');
    }

    /**
     * Register service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/socialshare.php', 'socialshare'
        );

        $this->app->singleton('socialshare', function () {
            return new SocialShare();
        });
    }
}

