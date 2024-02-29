<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;

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
})->name('home');

Route::view('/login', 'sessions.create')->middleware('guest')->name('sessions.create');
Route::controller(SessionsController::class)->group(function() {
	Route::post('/login', 'store')->middleware('guest')->name('sessions.store');
	Route::post('/logout', 'destroy')->middleware('auth')->name('sessions.destroy');
});
