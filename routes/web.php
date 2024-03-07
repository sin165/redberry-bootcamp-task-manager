<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;

Route::view('/tasks/create', 'tasks.create')->middleware('auth')->name('tasks.create');
Route::controller(TaskController::class)->group(function () {
	Route::get('/', 'index')->middleware('auth')->name('home');
	Route::post('/tasks', 'store')->middleware('auth')->name('tasks.store');
	Route::get('/tasks/{task}', 'show')->can('perform-task-operations', 'task')->name('tasks.show');
	Route::get('/tasks/{task}/edit', 'edit')->can('perform-task-operations', 'task')->name('tasks.edit');
	Route::patch('/tasks/{task}', 'update')->can('perform-task-operations', 'task')->name('tasks.update');
	Route::delete('/tasks/{task}', 'destroy')->can('perform-task-operations', 'task')->name('tasks.destroy');
	Route::delete('/overdue-tasks', 'destroyOverdueTasks')->middleware('auth')->name('tasks.destroy_overdue_tasks');
});

Route::view('/login', 'login')->middleware('guest')->name('login');
Route::controller(SessionsController::class)->group(function () {
	Route::post('/login', 'store')->middleware('guest')->name('sessions.store');
	Route::post('/logout', 'destroy')->middleware('auth')->name('sessions.destroy');
});

Route::view('/profile', 'profile')->middleware('auth')->name('profile');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');

Route::post('/language-switch', [LanguageController::class, 'switch'])->name('language.switch');
