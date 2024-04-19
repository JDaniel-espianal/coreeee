<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\controllers\TareaController;

Route::view('/', "index")->name('index');
Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');

Route::post('/auth-register', [LoginController::class, 'register'])->name('auth-register');
Route::post('/inicio-session', [LoginController::class, 'login'])->name('inicio-session');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/perfil', [LoginController::class, 'perfil'])->middleware('auth')->name('perfil');

Route::get('/tareas', [TareaController::class, 'tareas'])->middleware('auth')->name('tareas');
Route::get('/tareas/create', [TareaController::class, 'create'])->middleware('auth')->name('create');
Route::post('/tareas/store', [TareaController::class, 'store'])->middleware('auth')->name('store');
Route::get('/tareas/edit/{tarea}', [TareaController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('/tareas/update/{tarea}', [TareaController::class, 'update'])->middleware('auth')->name('update');
Route::delete('/tareas/destroy/{tarea}', [TareaController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::get('tareas/terminadas', [TareaController::class, 'terminadas'])->middleware('auth')->name('terminadas');