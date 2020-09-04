<?php

function admin($value)
{
    return auth()->user()->{$value} ?? '';
}

function activeRoute($route, $nested = false): string
{
    if ($nested) {
        return Route::is($route . '*') ? 'menu-item-open menu-item-here' : '';
    }
    return (Route::currentRouteName() === $route) ? 'menu-item-active' : '';
}
