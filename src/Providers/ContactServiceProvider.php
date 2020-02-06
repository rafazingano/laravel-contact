<?php

namespace ConfrariaWeb\Contact\Providers;

use ConfrariaWeb\Contact\Contracts\ContactContract;
use ConfrariaWeb\Contact\Contracts\ContactTypeContract;
use ConfrariaWeb\Contact\Repositories\ContactRepository;
use ConfrariaWeb\Contact\Repositories\ContactTypeRepository;
use ConfrariaWeb\Contact\Services\ContactService;
use ConfrariaWeb\Contact\Services\ContactTypeService;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //$this->loadViewsFrom(__DIR__ . '/../Views', 'contact');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'contact');
        $this->publishes([__DIR__ . '/../../config/cw_contact.php' => config_path('cw_contact.php')], 'cw_contact');
    }

    public function register()
    {
        $this->app->bind(ContactContract::class, ContactRepository::class);
        $this->app->bind('ContactService', function ($app) {
            return new ContactService($app->make(ContactContract::class));
        });

        $this->app->bind(ContactTypeContract::class, ContactTypeRepository::class);
        $this->app->bind('ContactTypeService', function ($app) {
            return new ContactTypeService($app->make(ContactTypeContract::class));
        });
    }

}
