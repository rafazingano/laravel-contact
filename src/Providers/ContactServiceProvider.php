<?php

namespace ConfrariaWeb\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'contact');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'contact');
        $this->publishes([__DIR__ . '/../../config/cw_contact.php' => config_path('cw_contact.php')], 'cw_contact');
    }

    public function register()
    {

    }

}
