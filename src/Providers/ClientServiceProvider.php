<?php

namespace ConfrariaWeb\Client\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        $this->publishes([__DIR__ . '/../../config/cw_client.php' => config_path('cw_client.php')], 'cw_client');
    }

    public function register()
    {

    }

}
