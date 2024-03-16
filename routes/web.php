<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WorkersController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\Banners\BannerController;
use App\Http\Controllers\Backend\Banners\MainBannerController;
use App\Http\Controllers\Backend\Banners\AboutBannerController;
use App\Http\Controllers\Backend\Banners\ChooseusBannerController;
use App\Http\Controllers\Backend\Banners\OrderBannerController;
use App\Http\Controllers\Backend\Banners\ReviewsBannerController;
use App\Http\Controllers\Backend\Banners\partnersBannerController;
use App\Http\Controllers\Backend\Banners\FunFactController;
use App\Http\Controllers\Backend\ClientOrderController;
use App\Http\Controllers\Backend\MarketingController;
use App\Http\Controllers\Backend\TeamController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\OrderController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/staff', [IndexController::class, 'staff'])->name('staff');
Route::get('/staff/{id}', [IndexController::class, 'staff_details'])->name('staff_details');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/faq', [IndexController::class, 'faq'])->name('faq');
Route::post('/order', [OrderController::class, 'store'])->name('home.order.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // User
        Route::resource('users', UserController::class);
        // Workers Route
        Route::resource('workers', WorkersController::class);
        Route::get('changeStatus', [WorkersController::class, 'changeStatus']);
        // Settings Route
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings/store', [SettingController::class, 'store'])->name('settings.store');
        Route::post('settings/store/{id}', [SettingController::class, 'store'])->name('settings.store');
        // Banners Route
        Route::resource('banners', BannerController::class);
        // Main Banner
        Route::get('main-banner', [MainBannerController::class, 'index'])->name('banners.mainbanner.index');
        Route::post('main-banner/store', [MainBannerController::class, 'store'])->name('mainbanner.store');
        Route::post('main-banner/store/{id}', [MainBannerController::class, 'store'])->name('mainbanner.store');
        // About Banner
        Route::get('about-banner', [AboutBannerController::class, 'index'])->name('banners.aboutbanner.index');
        Route::post('about-banner/store', [AboutBannerController::class, 'store'])->name('aboutbanner.store');
        Route::post('about-banner/store/{id}', [AboutBannerController::class, 'store'])->name('aboutbanner.store');
        // Choose us Banner
        Route::get('chooseus-banner', [ChooseusBannerController::class, 'index'])->name('banners.chooseusbanner.index');
        Route::post('chooseus-banner/store', [ChooseusBannerController::class, 'store'])->name('chooseusbanner.store');
        Route::post('chooseus-banner/store/{id}', [ChooseusBannerController::class, 'store'])->name('chooseusbanner.store');
        // Orders Banner
        Route::get('order-banner', [OrderBannerController::class, 'index'])->name('banners.orderbanner.index');
        Route::post('order-banner/store', [OrderBannerController::class, 'store'])->name('orderbanner.store');
        Route::post('order-banner/store/{id}', [OrderBannerController::class, 'store'])->name('orderbanner.store');
        // Reviews Banner
        Route::get('reviews-banner', [ReviewsBannerController::class, 'index'])->name('banners.reviewsbanner.index');
        Route::post('reviews-banner/store', [ReviewsBannerController::class, 'store'])->name('reviewsbanner.store');
        Route::post('reviews-banner/store/{id}', [ReviewsBannerController::class, 'store'])->name('reviewsbanner.store');
        // Partners
        Route::get('partners', [partnersBannerController::class, 'index'])->name('partners.index');
        Route::post('partners/store', [partnersBannerController::class, 'store'])->name('partners.store');
        Route::delete('partners/store/{id}/delete', [partnersBannerController::class, 'delete'])->name('partners.delete');
        // FunFact
        Route::get('funfact', [FunFactController::class, 'index'])->name('funfact.index');
        Route::post('funfact/store', [FunFactController::class, 'store'])->name('funfact.store');
        Route::post('funfact/store/{id}', [FunFactController::class, 'store'])->name('funfact.store');
        // FunFact
        Route::resource('clients-orders', ClientOrderController::class);
        // Marketng
        Route::get('marketing', [MarketingController::class, 'index'])->name('marketing');
        Route::get('marketing/notification', [MarketingController::class, 'notification'])->name('notification.index');
        Route::post('marketing/notification/store/', [MarketingController::class, 'notification_post'])->name('notification.store');
        Route::post('marketing/notification/store/{id}', [MarketingController::class, 'notification_post'])->name('notification.store');
        Route::get('marketing/notification/change-status', [MarketingController::class, 'changeNotificationStatus']);
        Route::get('marketing/popup', [MarketingController::class, 'popup'])->name('popup.index');
        Route::post('marketing/popup/store/', [MarketingController::class, 'popup_post'])->name('popup.store');
        Route::post('marketing/popup/store/{id}', [MarketingController::class, 'popup_post'])->name('popup.store');
        Route::get('marketing/popup/change-status', [MarketingController::class, 'changePopupStatus']);
        // Team Route
        Route::resource('team', TeamController::class);
        Route::get('change-status-team', [TeamController::class, 'changeStatus']);
    });
});

require __DIR__.'/auth.php';
