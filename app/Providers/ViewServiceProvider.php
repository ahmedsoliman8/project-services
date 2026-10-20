<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            $currentAdminAssets = LaravelLocalization::getCurrentLocale() == 'ar' ? 'assets-admin-rtl' : 'assets-admin';
            $currentLocale = LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar';

            $view->with(
                ['currentAdminAssets' => $currentAdminAssets,
                    'direction' => LaravelLocalization::getCurrentLocaleDirection(),
                    'currentLocale' => $currentLocale,
                ]

            );
        });
    }
}
