<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Settings\SeoController;
use App\Http\Controllers\Settings\UserController;

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

Route::get('/settings', function () {
    return view('backend.settings.index');
});

/*
// settings/seo
*/
Route::middleware(['web'])->group(function () {

    Route::get('/settings-seo', [SeoController::class, 'index'])->name('settings-seo.index');
    Route::post('/settings-seo/update', [SeoController::class, 'update'])->name('settings-seo.update');
});

/*
// settings/users
*/
Route::prefix('settings')->group(function () {
    Route::resource('users', UserController::class);
});
/*
// settings/global
*/
Route::prefix('settings/global')->group(function () {
    /*
    // 
    */
    Route::view('company', 'backend.settings.global.company.index');
    Route::view('languages', 'backend.settings.global.languages.index');
    /*
    // 
    */
    Route::view('analysis/google-search-console', 'backend.settings.global.analysis.google-search-console');
    Route::view('analysis/google-analytics', 'backend.settings.global.analysis.google-analytics');
    Route::view('analysis/google-tag-manager', 'backend.settings.global.analysis.google-tag-manager');
    Route::view('analysis/google-merchant-center', 'backend.settings.global.analysis.google-merchant-center');
    Route::view('analysis/hotjar', 'backend.settings.global.analysis.hotjar');
    Route::view('analysis/ahrefs', 'backend.settings.global.analysis.ahrefs');
    /*
    // 
    */
    Route::view('notifications/stock-status', 'backend.settings.global.notifications.stock-status');
    Route::view('notifications/new-orders', 'backend.settings.global.notifications.new-orders');
    Route::view('notifications/contact-forms', 'backend.settings.global.notifications.contact-forms');
    /*
    // 
    */
    Route::view('email/1', 'backend.settings.global.email.index-1');
    Route::view('email/2', 'backend.settings.global.email.index-2');
    Route::view('email/3', 'backend.settings.global.email.index-3');
});
/*
// settings/shop
*/
Route::prefix('settings/shop/')->group(function () {
    /*
    // 
    */
    Route::view('maintenance-mode', 'backend.settings.shop.maintenance-mode.index');
    /*
    // 
    */
    Route::view('pages/about-company', 'backend.settings.shop.pages.about-company');
    Route::view('pages/contact', 'backend.settings.shop.pages.contact');
    Route::view('pages/shop-terms', 'backend.settings.shop.pages.shop-terms');
    Route::view('pages/return-policy', 'backend.settings.shop.pages.return-policy');
    Route::view('pages/delivery-methods', 'backend.settings.shop.pages.delivery-methods');
    Route::view('pages/payment-methods', 'backend.settings.shop.pages.payment-methods');
    Route::view('pages/privacy-policy', 'backend.settings.shop.pages.privacy-policy');
    Route::view('pages/cookie-policy', 'backend.settings.shop.pages.cookie-policy');
    /*
    // 
    */
    Route::view('layout/brand', 'backend.settings.shop.layout.brand');
    Route::view('layout/banner-carousel', 'backend.settings.shop.layout.banner-carousel');
    Route::view('layout/other-banners', 'backend.settings.shop.layout.other-banners');
    Route::view('layout/other/information-alert', 'backend.settings.shop.layout.information-alert');
    Route::view('layout/other/social-media', 'backend.settings.shop.layout.social-media');
});
/*
// settings/ecommerce
*/
Route::prefix('settings/ecommerce/')->group(function () {

    Route::view('sales-method', 'backend.settings.ecommerce.sales-method.index');
});
