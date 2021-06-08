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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/profile', function () {
    return view('profile');
});

Route::get('/approved', function () {
    return view('approved');
});

Route::get('/rejected', function () {
    return view('rejected');
});

Route::get('/finalized', function () {
    return view('finalized');
});

Route::get('/submitted', function () {
    return view('submitted');
});

Route::get('/pendig-edit', function () {
    return view('pendig-edit');
});