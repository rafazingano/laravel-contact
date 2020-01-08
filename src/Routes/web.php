<?php

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\Contact\Controllers')
    ->group(function () {

        Route::name('contacts.')
            ->prefix('contacts')
            ->group(function () {
                Route::resource('types', 'ContactTypeController');
            });
    });

