<?php

use App\Models\Stars;
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
    return redirect()->route('stars');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/stars', function () { //je devrais créer une class à  part pour plus de lisibilité et meilleur utilisation, mais gain de temps
    $stars = Stars::all();
    return view('stars', compact("stars"));
})->name('stars');

//Accès uniquement si authentifié
Route::group(['middleware' => 'auth'], function () {
    Route::delete('star/deleteSelected', [\App\Http\Controllers\StarsController::class, 'deleteSelected'])->name('star.deleteSelected');
    Route::resource('star', \App\Http\Controllers\StarsController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
