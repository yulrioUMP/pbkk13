<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RoleController;

Route::middleware(['auth', 'checkRole:user,admin'])->group(function () {
    Route::get('/about', [RoleController::class, 'about']);
    Route::get('/contact', [RoleController::class, 'contact']);
});

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/log', [RoleController::class, 'log']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', [TestController::class, 'beranda']);

Route::middleware(['auth'])->group(function () {
    Route::get('/karya', [TestController::class, 'karya']);
});

// Route::get('/karya', function () {
//     return view('pekerjaan');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
