<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
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


// Route::middleware(CheckUserSession::class)->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard']);
//     Route::get('/admin/user',[UserController::class, 'index']);
//     Route::get('/admin/user/create',[UserController::class, 'create']);

//     Route::get('/admin/user/create',[UserController::class, 'create']);
// });

Route::middleware(CheckUserSession::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/admin/user',[UserController::class, 'index']);
    Route::get('/admin/user/create',[UserController::class, 'create']);

    Route::get('/admin/user/create',[UserController::class, 'create']);

    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product/create', [ProductController::class, 'create']);

    Route::get('/admin/ajxFetchAllUsers', [UserController::class, 'ajxFetchAllUsers']);

});

// Route::middleware(IsAdmin::class)->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard']);
//     Route::get('/admin/user',[UserController::class, 'index']);
//     Route::get('/admin/user/create',[UserController::class, 'create']);

//     Route::get('/admin/user/create',[UserController::class, 'create']);
// });

// Route::get('/logout', function () {
//     Session::forget('user');
//     return redirect('/login');
// })->name('logout');

Route::post('/logout', [AuthController::class, 'logout']);