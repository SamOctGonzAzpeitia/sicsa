<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/services', function () {
    return view('servicios');
})->name('services') ;

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

Route::get('/users', function () {
    return view('users');
})->name('users') ;

Route::get('/orders', function () {
    return view('orders');
})->name('orders') ;

Route::get('/orders/create', function () {
    return view('orders.create');
})->name('orders.create') ;

Route::get('/orders/{order}', function () {
    return view('orders.show');
})->name('orders.show') ;

Route::get('/orders/{order}/edit', function () {
    return view('orders.edit');
})->name('orders.edit') ;

Route::get('/orders/{order}/delete', function () {
    return view('orders.delete');
})->name('orders.delete') ;

Route::get('/users/{user}', function () {
    return view('users.show');
})->name('users.show') ;

Route::get('/users/{user}/edit', function () {
    return view('users.edit');
})->name('users.edit') ;

Route::get('/users/{user}/delete', function () {
    return view('users.delete');
})->name('users.delete') ;

