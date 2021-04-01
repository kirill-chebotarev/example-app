<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name( 'home');

Route::get('/categories', [CategoryController::class, 'showCategoryList'])->name('categories');
Route::get('/categories/{categoryId}', [CategoryController::class, 'showNewsList'])->name('category');

Route::get('/categories/news/{newsId}', [NewsController::class, 'show'])->name('show_news');
Route::get('/categories/news/news/create', [NewsController::class, 'create'])->name('create_news');

