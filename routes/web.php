<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('users')->name("users.")->group(function() {
    Route::get('/', UserController::class)->name("index");
})->middleware(['auth', 'verified']);

Route::prefix('movies')->name("movies.")->group(function() {
    Route::get('/', MovieController::class)->name("index");
})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
