<?php

use App\Http\Controllers\EloquentController;
use App\Models\User;
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

Route::redirect('/', '/learn-laravel-eloquent-relationship');
Route::prefix('/learn-laravel-eloquent-relationship')->group(function () {
    Route::get('/', fn () => view('index', ['data' => User::all()]))->name('home');
    Route::get('/one-to-one', [EloquentController::class, 'one_to_one'])->name('one-to-one');
    Route::get('/one-to-many', [EloquentController::class, 'one_to_many'])->name('one-to-many');
});
