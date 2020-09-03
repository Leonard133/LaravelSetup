<?php

namespace App\Providers;

use App\Generator\LaranowGenerator;
use Blueprint\Blueprint;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class BlueprintAddonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend(Blueprint::class,
            function (Blueprint $blueprint, Container $app) {
                $blueprint->swapGenerator(
                    \Blueprint\Generators\ControllerGenerator::class,
                    new LaranowGenerator($app['files'])
                );

                return $blueprint;
            });
    }
}
