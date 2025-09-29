<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserSession;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/ajxlogin', [AuthController::class, 'ajxlogin']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);


Route::middleware(CheckUserSession::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/admin/user',[UserController::class, 'index']);
    Route::get('/admin/user/create',[UserController::class, 'create']);
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
})->name('logout');