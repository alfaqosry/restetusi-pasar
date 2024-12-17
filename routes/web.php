<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\SewatempatController;
use App\Http\Controllers\TransactionController;
use App\Models\Sewatempat;
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
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login/post', [AuthController::class, 'post'])->name('auth.post');
Route::post('/register/store', [AuthController::class, 'store'])->name('register.store');

Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
Route::get('/toko/create', [TokoController::class, 'create'])->name('toko.create');
Route::post('/toko/store', [TokoController::class, 'store'])->name('toko.store');
Route::get('/toko/edit/{id}', [TokoController::class, 'edit'])->name('toko.edit');
Route::post('/toko/update/{id}', [TokoController::class, 'update'])->name('toko.update');

Route::get('/pedagang', [PedagangController::class, 'index'])->name('pedagang.index');
Route::get('/pedagang/create', [PedagangController::class, 'create'])->name('pedagang.create');
Route::post('/pedagang/store', [PedagangController::class, 'store'])->name('pedagang.store');
Route::get('/pedagang/edit/{id}', [PedagangController::class, 'edit'])->name('pedagang.edit');
Route::post('/pedagang/update/{id}', [PedagangController::class, 'update'])->name('pedagang.update');


Route::get('/sewatempat', [SewatempatController::class, 'index'])->name('sewatempat.index');
Route::get('/sewatempat/create', [SewatempatController::class, 'create'])->name('sewatempat.create');
Route::get('/sewatempat/show/{id}', [SewatempatController::class, 'show'])->name('sewatempat.show');

Route::get('/transaction/success/{transaction}', [TransactionController::class, 'success'])->name('transaction.success');



