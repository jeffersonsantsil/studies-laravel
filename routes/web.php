<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;



Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get("users/newUser", [UserController::class, 'newUser'])->name('users.newUser');
Route::get("users/{id}", [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome')->name('welcome');
});
