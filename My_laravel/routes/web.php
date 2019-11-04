<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
});
Route::get('me_admin', function () {
    return view('admin.layout');
});
Route::get('register/addschool', function () {
    return view('register/addschool');
})->name('addSchool');
Route::get('checkpoint', function () {
    return view('system.point.checkpoint');
})->name('checkpoint');
Route::get('point', function () {
    return view('system.point.point');
})->name('point');

