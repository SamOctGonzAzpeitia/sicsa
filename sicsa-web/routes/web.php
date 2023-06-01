<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('index');
})->name('home') ;

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios') ;

Route::get('/sistemas', function () {
    return view('sistemas');
})->name('sistemas') ;

Route::get('/contact', function () {
    return view('contacto');
})->name('contact') ;

Route::get('/login', function () {
    return view('login');
})->name('login') ;

Route::get('/register', function () {
    return view('register');
})->name('register') ;

Route::get('/services', [ServicesController::class, 'index'])->name('services') ;
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create') ;

Route::get('/users', [UserController::class, 'index'])->name('users') ;

Route::get('/roles', [RoleController::class, 'index'])->name('roles') ;