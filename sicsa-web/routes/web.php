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