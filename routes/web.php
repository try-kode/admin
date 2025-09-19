<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/admin/user',[UserController::class, 'index']);
Route::get('/admin/user/create',[UserController::class, 'create']);