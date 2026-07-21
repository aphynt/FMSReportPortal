<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SSRSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);

Route::get('/ssrs/{path?}', [SSRSController::class, 'proxy'])->where('path', '.*');

Route::get('/dashboards/production', [DashboardController::class, 'production'])->name('dashboard.production');
