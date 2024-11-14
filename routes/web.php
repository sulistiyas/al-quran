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
Route::get('/auth', [LoginController::class, 'auth_login'])->name('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    // Route::post('/logout_auth', [LoginController::class, 'auth_logout'])->name('auth_logout');

    // admin

    Route::middleware(['auth', 'userRole:0'])->group(function () {
        Route::get('/Admin/Dash', [AdminController::class, 'index_admin'])->name('index_admin');
        Route::get('/Admin/User/List', [AdminController::class, 'index_users'])->name('index_users');
        Route::post('/Admin/User/Store', [AdminController::class, 'store_users'])->name('store_users');
        Route::get('/Admin/User/View/{id}', [AdminController::class, 'show_users'])->name('show_users');
        Route::get('/Admin/User/Edit/{id}', [AdminController::class, 'edit_users'])->name('edit_users');
        Route::post('/Admin/User/Update/{id}', [AdminController::class, 'update_users'])->name('update_users');
        Route::delete('/Admin/User/Delete/{id}', [AdminController::class, 'destroy_user'])->name('destroy_users');
    });

    // user
    Route::middleware(['auth', 'userRole:1'])->group(function () {
        Route::get('/User/Dash', [UserController::class, 'index'])->name('index_user');
    });
});
