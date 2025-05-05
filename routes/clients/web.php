<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Clients\ClientGroupController;

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


Route::prefix('clients')->group(function () {
    Route::get('client/verifed', [ClientController::class, 'verifed'])->name('client.verifed');
    Route::resource('client', ClientController::class);
    Route::resource('groups', ClientGroupController::class);
});



// Route::get('/clients/all', function () {
//     return view('backend.clients.clients.index');  // Widok w folderze app/Modules/Clients/Resources/views/clients/all.blade.php
// });

// Route::get('/clients/add', function () {
//     return view('backend.clients.clients.create');  // Widok w folderze app/Modules/Clients/Resources/views/clients/add.blade.php
// });

// Route::get('/clients/edit', function () {
//     return view('backend.clients.clients.edit');  // Widok w folderze app/Modules/Clients/Resources/views/clients/edit.blade.php
// });

// Route::get('/clients/show', function () {
//     return view('backend.clients.clients.show');  // Widok w folderze app/Modules/Clients/Resources/views/clients/show.blade.php
// });


// Route::get('/clients/groups/all', function () {
//     return view('backend.clients.groups.index');  // Widok w folderze app/Modules/Clients/Resources/views/clients/all.blade.php
// });

// Route::get('/clients/groups/add', function () {
//     return view('backend.clients.groups.create');  // Widok w folderze app/Modules/Clients/Resources/views/clients/add.blade.php
// });

// Route::get('/clients/groups/edit', function () {
//     return view('backend.clients.groups.edit');  // Widok w folderze app/Modules/Clients/Resources/views/clients/edit.blade.php
// });

// Route::get('/clients/groups/show', function () {
//     return view('backend.clients.groups.show');  // Widok w folderze app/Modules/Clients/Resources/views/clients/show.blade.php
// });


// Route::get('/clients/verification', function () {
//     return view('backend.clients.verifications.verification-company');  // Widok w folderze app/Modules/Clients/Resources/views/clients/verification-company.blade.php
// });
