<?php

use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('site.index');
})->name('dashboard');

Route::get('/login', function(){
    return view('site.auth.login');
});

Route::get('/peso-hora-hora', function(){
    return view('site.peso.parametros-peso');
})->name('definicoes.peso');

Route::put('/pessagem-iniciada', [SessionController::class, 'session'])->name('set.session');
Route::get('/destroy', [SessionController::class, 'destroy'])->name('session.destroy');
Route::get('/peso', function (){
    return view('site.peso.pesagem');
})->name('pessagem');