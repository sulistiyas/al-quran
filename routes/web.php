<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/auth', [LoginController::class, 'auth_login'])->name('auth');
    // Route::post('/logout_auth', [LoginController::class, 'auth_logout'])->name('auth_logout');

    // admin
    Route::middleware(['auth', 'userRole:0'])->group(function () {
        Route::get('/Admin/Dash', [AdminController::class, 'index'])->name('index_admin');
    });

    // user
    Route::middleware(['auth', 'userRole:1'])->group(function () {
        Route::get('/User/Dash', [UserController::class, 'index'])->name('index_user');
    });
});
