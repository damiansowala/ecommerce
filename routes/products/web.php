<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Products\ProductController;
use App\Models\Products\Product;

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



Route::prefix('products')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('product', ProductController::class);
});


/*
//
// products/attributes
//
*/


Route::get('/products/attributes/all', function () {
    return view('backend.products.attributes.index');  // Widok w folderze views/categories/all.blade.php
});

Route::get('/products/attributes/add', function () {
    return view('backend.products.attributes.create');  // Widok w folderze views/categories/add.blade.php
});

Route::get('/products/attributes/edit', function () {
    return view('backend.products.attributes.edit');  // Widok w folderze views/categories/edit.blade.php
});

Route::get('/products/attributes/show', function () {
    return view('backend.products.attributes.show');  // Widok w folderze views/categories/show.blade.php
});


/*
//
// products/attributes/categories
//
*/

Route::get('/products/attributes/categories/all', function () {
    return view('backend.products.attributes.categories.index');  // Widok w folderze views/categories/all.blade.php
});

Route::get('/products/attributes/categories/add', function () {
    return view('backend.products.attributes.categories.create');  // Widok w folderze views/categories/add.blade.php
});

Route::get('/products/attributes/categories/edit', function () {
    return view('backend.products.attributes.categories.edit');  // Widok w folderze views/categories/edit.blade.php
});

Route::get('/products/attributes/categories/show', function () {
    return view('backend.products.attributes.categories.show');  // Widok w folderze views/categories/show.blade.php
});
