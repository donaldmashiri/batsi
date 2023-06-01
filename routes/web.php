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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::resource('tasks', \App\Http\Controllers\TaskController::class,);
Route::resource('activities', \App\Http\Controllers\ActivityController::class,);
Route::resource('users', \App\Http\Controllers\UserController::class,);
Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');

Route::post('/activities/import', [\App\Http\Controllers\ActivityController::class, 'import'])->name('activities.import');
