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

//Rutas de inicio a portal
Route::get('/home', function () {
    return view('home');
})->name('inicio-sicsa') ;

//Rutas de servicios

Route::get('/services/index', [ServicesController::class, 'index'])
    ->name('services') ;
Route::get('/services/create', [ServicesController::class, 'create'])
    ->name('services.create') ;
Route::post('/services/register', [ServicesController::class, 'store'])
    ->name('services.store') ;
Route::get('/services/show/{id}', [ServicesController::class, 'show'])
    ->name('services.show') ;
Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])
    ->name('services.edit') ;
Route::post('/services/update/{id}', [ServicesController::class, 'update'])
    ->name('services.update') ;
Route::post('/services/delete/{id}', [ServicesController::class, 'destroy'])
    ->name('services.destroy') ;

//Rutas de usuarios

Route::get('/users', [UserController::class, 'index'])
    ->name('users') ;
Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create') ;
Route::post('/users/register', [UserController::class, 'store'])
    ->name('users.store') ;
Route::get('/users/show/{id}', [UserController::class, 'show'])
    ->name('users.show') ;
Route::get('/users/edit/{id}', [UserController::class, 'edit'])
    ->name('users.edit') ;
Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->name('users.update') ;
Route::post('/users/delete/{id}', [UserController::class, 'destroy'])
    ->name('users.destroy') ;


//Rutas de roles
Route::get('/roles', [RoleController::class, 'index'])
    ->name('roles') ;