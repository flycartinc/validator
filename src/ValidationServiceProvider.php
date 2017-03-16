<?php

namespace FlycartValidator;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('validation', function () {
            return new ValidationBuilder();
        });
    }
}
