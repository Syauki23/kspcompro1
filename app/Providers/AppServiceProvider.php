<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share global & contact settings to all views automatically
        if (Schema::hasTable('settings')) {
            View::composer('*', function ($view) {
                $globalSettings = Setting::whereIn('group', ['global', 'contact'])->pluck('value', 'key')->toArray();
                $view->with('globalSettings', $globalSettings);
            });
        }
    }
}

