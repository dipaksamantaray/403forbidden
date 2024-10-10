<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthnicatedController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthnicatedController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthnicatedController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/profile', function () {
        return view('user.profile');
    });
});