<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Livewire\MediaLibrary;
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

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/backend/livewire/update', $handle);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/media', MediaLibrary::class)->name('media.index');

require base_path('routes/galleries/web.php');
require base_path('routes/clients/web.php');
require base_path('routes/products/web.php');
require base_path('routes/storage/web.php');
require base_path('routes/sales/web.php');
require base_path('routes/traders/web.php');
require base_path('routes/settings/web.php');
require base_path('routes/messages/web.php');
require base_path('routes/manufacturers/web.php');





/*
//
// developer
//
*/

Route::prefix('dev')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});
/*
//
// dashboard
//
*/

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('backend/home');
