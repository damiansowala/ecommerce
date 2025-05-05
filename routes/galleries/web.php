<?php



Route::get('/galleries/all', function () {
    return view('backend.galleries.all');
});
Route::get('/galleries/add', function () {
    return view('backend.galleries.add');
});
Route::get('/galleries/edit', function () {
    return view('backend.galleries.edit');
});
