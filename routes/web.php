<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view('/', "index")->name('index');
Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');

Route::post('/auth-register', [LoginController::class, 'register'])->name('auth-register');
Route::post('/inicio-session', [LoginController::class, 'login'])->name('inicio-session');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::view('/tareas', "tareas")->middleware('auth')->name('tareas');