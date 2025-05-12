<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//dashboard content
Route::get('/users/view', [UserController::class, 'view'])->name('user.view');
