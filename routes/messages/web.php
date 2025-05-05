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


Route::get('/messages/all', function () {
    return view('backend.messages.index');  // Widok w folderze app/Modules/Messages/Resources/views/messages/all.blade.php
});

Route::get('/messages/add', function () {
    return view('backend.messages.create');  // Widok w folderze app/Modules/Messages/Resources/views/messages/add.blade.php
});

Route::get('/messages/new', function () {
    return view('backend.messages.new-messages');  // Widok w folderze app/Modules/Messages/Resources/views/messages/edit.blade.php
});
