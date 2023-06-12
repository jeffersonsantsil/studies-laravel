<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;



Route::get('home', [UserController::class, 'home'])->name('users.home');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/newUser', [UserController::class, 'newUser'])->name('users.newUser');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::post("users/edit/{id}", [UserController::class, 'edit'])->name('users.edit');
Route::get("users/delete/{id}", [UserController::class, 'delete'])->name('users.delete');
Route::get("users/{id}", [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome')->name('welcome');
});
