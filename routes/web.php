<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::redirect('/', '/learn-laravel-eloquent-relationship');
Route::prefix('/learn-laravel-eloquent-relationship')->group(function () {
    Route::get('/', fn () => view('index'))->name('home');
});
