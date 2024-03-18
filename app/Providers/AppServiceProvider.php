<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Backend\Setting;
use App\Models\Backend\Notification;
use App\Models\Backend\Popup;
use App\Models\Backend\Pages;
use Illuminate\Support\Facades\View;

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
        $settings = Setting::first();
        $notification = Notification::first();
        $popup = Popup::first();
        $pages = Pages::get();
        View::share([
            'settings'     => $settings,
            'notification' => $notification,
            'popup' => $popup,
            'pages' => $pages,
        ]);
    }
}
