<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;

Route::controller(TaskController::class)->group(function () {
	Route::get('/', 'index')->middleware('auth')->name('home');
	Route::get('/tasks/{task}', 'show')->can('perform-task-operations', 'task')->name('tasks.show');
	Route::delete('/tasks/{task}', 'destroy')->can('perform-task-operations', 'task')->name('tasks.destroy');
	Route::delete('/overdue-tasks', 'destroyOverdueTasks')->middleware('auth')->name('tasks.destroy_overdue_tasks');
});

Route::view('/login', 'login')->middleware('guest')->name('login');
Route::controller(SessionsController::class)->group(function () {
	Route::post('/login', 'store')->middleware('guest')->name('sessions.store');
	Route::post('/logout', 'destroy')->middleware('auth')->name('sessions.destroy');
});

Route::post('/language-switch', [LanguageController::class, 'switch'])->name('language.switch');
