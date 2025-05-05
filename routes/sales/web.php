<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Orders\OrderController;

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

// Route::get('/orders/all', function () {
//     return view('backend.sales.orders.index');  // Widok w folderze app/Modules/Sales/Resources/views/orders/all.blade.php
// });
// Route::get('/orders/new', function () {
//     return view('backend.sales.orders.new-ordes');  // Widok w folderze app/Modules/Sales/Resources/views/orders/all.blade.php
// });

// Route::get('/orders/add', function () {
//     return view('backend.sales.orders.create');  // Widok w folderze app/Modules/Sales/Resources/views/orders/add.blade.php
// });

// Route::get('/orders/edit', function () {
//     return view('backend.sales.orders.edit');  // Widok w folderze app/Modules/Sales/Resources/views/orders/edit.blade.php
// });

// Route::get('/orders/show', function () {
//     return view('backend.sales.orders.show');  // Widok w folderze app/Modules/Sales/Resources/views/orders/show.blade.php
// });

Route::resource('orders', OrderController::class);





Route::get('/orders/returns/all', function () {
    return view('backend.sales.returns.index');  // Widok w folderze app/Modules/Sales/Resources/views/orders/all.blade.php
});

Route::get('/orders/returns/new', function () {
    return view('backend.sales.returns.new-returns');  // Widok w folderze app/Modules/Sales/Resources/views/orders/all.blade.php
});

Route::get('/orders/returns/add', function () {
    return view('backend.sales.returns.create');  // Widok w folderze app/Modules/Sales/Resources/views/orders/add.blade.php
});

Route::get('/orders/returns/edit', function () {
    return view('backend.sales.returns.edit');  // Widok w folderze app/Modules/Sales/Resources/views/orders/edit.blade.php
});

Route::get('/orders/returns/show', function () {
    return view('backend.sales.returns.show');  // Widok w folderze app/Modules/Sales/Resources/views/orders/show.blade.php
});





Route::get('/orders/documents/paid', function () {
    return view('backend.sales.documents.paid');  // Widok w folderze app/Modules/Sales/Resources/views/orders/edit.blade.php
});

Route::get('/orders/documents/no-paid', function () {
    return view('backend.sales.documents.no-paid');  // Widok w folderze app/Modules/Sales/Resources/views/orders/show.blade.php
});
