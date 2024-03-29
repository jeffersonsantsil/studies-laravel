<?php

use App\Http\Controllers\{
    ComponetesController,
    UserController
};
use Illuminate\Support\Facades\Route;


Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController:: class, 'edit'])->name('user.edit');
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::post('/cadUser', [UserController::class, 'createUser'])->name('cad.user');


