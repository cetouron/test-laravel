<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stars', function () {
    return view('stars');
});

Route::group(['middleware' => 'auth'], function () {
    Route::delete('star/deleteSelected', [\App\Http\Controllers\StarsController::class, 'deleteSelected'])->name('star.deleteSelected');
    Route::resource('star', \App\Http\Controllers\StarsController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
