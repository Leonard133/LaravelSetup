<?php

namespace App\Providers;

use App\Generator\ControllerGenerator;
use App\Generator\RouteGenerator;
use App\Generator\ViewGenerator;
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
                    new ControllerGenerator($app['files'])
                );

                $blueprint->swapGenerator(
                    \Blueprint\Generators\RouteGenerator::class,
                    new RouteGenerator($app['files'])
                );

                $blueprint->swapGenerator(
                    \Blueprint\Generators\Statements\ViewGenerator::class,
                    new ViewGenerator($app['files'])
                );

                return $blueprint;
            });
    }
}
