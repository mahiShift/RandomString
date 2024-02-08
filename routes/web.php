<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateView;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;




Route::get('/', [HomeController::class, 'login']);
Route::post('/login', [AuthController::class, 'CheckRequest'])->name('login');

Route::middleware([AuthenticateView::class])->group(function () {
    Route::get('/index', [HomeController::class, 'index'])->name('index');
});