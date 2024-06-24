<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StageAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/register', function () {
    return view('reg');
});
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/forgot-password', [UserController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [UserController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [UserController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [UserController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::post('/add', [UserController::class, 'store'])->name('add');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::middleware('auth')->prefix('course')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    
    Route::prefix('level')->group(function () {
        Route::get('/{level}', [DashboardController::class, 'show'])->name('show');
    });
    Route::prefix('quiz')->group(function () {
        Route::get('/{level}', [DashboardController::class, 'quiz'])->name('quiz');
        Route::post('/{level}', [DashboardController::class, 'update_quiz'])->name('update-quiz');
    });
});

Route::prefix('admin')->middleware('admin')->group(function(){
    route::get('/', [AdminController::class, 'index']);
    route::get('/edit/{id}', [AdminController::class, 'edituser'])->name('edit');
    route::post('/user}', [AdminController::class, 'store'])->name('adduser');
    route::put('/update/{id}', [AdminController::class, 'updateuser'])->name('update');
    route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');
    route::put('stage/{id}', [StageAdminController::class, 'update'])->name('admin-stage.update');
    route::resource('/stage', StageAdminController::class);
    route::get('quiz/{level}', [StageAdminController::class, 'quiz'])->name('readQuiz');
});

