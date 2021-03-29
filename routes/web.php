<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/home', function () {
    return 'Welcome to our page';
})->name('home');

Route::get('/info', function () {
    return 'Some info about project';
})->name('info');

Route::get('/news', function () {
    return 'Show news';
})->name('news');

