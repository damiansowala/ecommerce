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


Route::get('/storage/processing', function () {
    return view('backend.storage.orders.processing-orders');
});
Route::get('/storage/on-hold', function () {
    return view('backend.storage.orders.on-hold-orders');
});
Route::get('/storage/ready', function () {
    return view('backend.storage.orders.ready-orders');
});
Route::get('/storage/completed', function () {
    return view('backend.storage.orders.completed-orders');
});
Route::get('/storage/returned', function () {
    return view('backend.storage.orders.returned-orders');
});
