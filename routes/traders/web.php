<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;

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

use App\Http\Controllers\Traders\TraderController;

Route::middleware(['auth'])->group(function () {
    Route::resource('traders', TraderController::class);
});





Route::get('/traders/groups/all', function () {
    return view('backend.traders.traders.groups.index');  // Widok w folderze app/Modules/Traders/Resources/views/traders/all.blade.php
});

Route::get('/traders/groups/add', function () {
    return view('backend.traders.traders.groups.create');  // Widok w folderze app/Modules/Traders/Resources/views/traders/add.blade.php
});

Route::get('/traders/groups/edit', function () {
    return view('backend.traders.traders.groups.edit');  // Widok w folderze app/Modules/Traders/Resources/views/traders/edit.blade.php
});

Route::get('/traders/groups/show', function () {
    return view('backend.traders.traders.groups.show');  // Widok w folderze app/Modules/Traders/Resources/views/traders/show.blade.php
});
