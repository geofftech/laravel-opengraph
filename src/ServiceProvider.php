<?php

namespace GeoffTech\LaravelOpenGraph;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/opengraph.php', 'opengraph');

        $this->app->singleton(OpenGraph::class);
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/opengraph.php' => config_path('opengraph.php'),
        ]);

        // $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'opengraph');
    }
}
