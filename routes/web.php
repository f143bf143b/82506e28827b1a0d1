<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/feed', function () {
    return view('welcome');
});
Route::get('/reg', function () {
    return view('reg.reg');
});
Route::post('/reg', function () {
    return view('reg.reg');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::post('/login', function () {
    return view('login.login');
});
Route::get('/photo', function () {
    return view('photo.photo');
});
Route::get('/album', function () {
    return view('album.album');
});
Route::get('/search', function () {
    return view('search.search');
});