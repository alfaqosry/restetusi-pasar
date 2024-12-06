<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TokoController;
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




Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login/post', [AuthController::class, 'post'])->name('auth.post');

Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');

