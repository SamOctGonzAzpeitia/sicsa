<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController;


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
})->name('sicsa') ;

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios') ;

Route::get('/sistemas', function () {
    return view('sistemas');
})->name('sistemas') ;

Route::get('/PAI', function () {
    return view('Sistemas.pai');
})->name('pai') ;

Route::get('/P-V', function () {
    return view('Sistemas.pv');
})->name('pv') ;

Route::get('/CAC', function () {
    return view('Sistemas.cac');
})->name('cac') ;

Route::get('/Nominas', function () {
    return view('Sistemas.nominas');
})->name('nominas') ;

Route::get('/contact', function () {
    return view('contacto');
})->name('contact') ;

Route::get('/login', function () {
    return view('auth.login');
})->name('login') ;

Route::get('/register', function () {
    return view('register');
})->name('register') ;

//Rutas de inicio a portal
Route::get('/home', function () {
    return view('home');
    })->middleware('auth')->name('home');

//Rutas de servicios

Route::get('/services/index', [ServicesController::class, 'index'])
    ->middleware('can:verServicios')
    ->name('services') ;

Route::get('/services/dateFilter', [ServicesController::class, 'dateFilter'])
    ->middleware('can:verServicios')
    ->name('services.dateFilter') ;    

Route::get('/services/clientsFilter', [ServicesController::class, 'clientFilter'])
    ->middleware('can:verServicios')
    ->name('services.clientFilter') ;

Route::get('/services/create', [ServicesController::class, 'create'])
    ->middleware('can:registrarServicio')
    ->name('services.create') ;
Route::post('/services/register', [ServicesController::class, 'store'])
    ->middleware('can:registrarServicio')
    ->name('services.store') ;
Route::get('/services/show/{id}', [ServicesController::class, 'show'])
    ->middleware('can:editarServicio')
    ->name('services.show') ;
Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])
    ->middleware('can:editarServicio')
    ->name('services.edit') ;
Route::post('/services/update/{id}', [ServicesController::class, 'update'])
    ->middleware('can:editarServicio')
    ->name('services.update') ;
Route::post('/services/delete/{id}', [ServicesController::class, 'destroy'])
    ->middleware('can:eliminarServicio')
    ->name('services.destroy') ;

//Rutas de usuarios

Route::get('/users', [UserController::class, 'index'])
    ->middleware('can:verUsuarios')
    ->name('users') ;
Route::get('/users/create', [UserController::class, 'create'])
    ->middleware('can:registrarUsuario')
    ->name('users.create') ;
Route::post('/users/register', [UserController::class, 'store'])
    ->middleware('can:registrarUsuario')
    ->name('users.store') ;
Route::get('/users/show/{id}', [UserController::class, 'show'])
    ->middleware('can:verUsuarios')
    ->name('users.show') ;
Route::get('/users/edit/{id}', [UserController::class, 'edit'])
    ->middleware('can:editarUsuario')
    ->name('users.edit') ;
Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->middleware('can:editarUsuario')
    ->name('users.update') ;
Route::post('/users/delete/{id}', [UserController::class, 'destroy'])
    ->middleware('can:eliminarUsuario')
    ->name('users.destroy') ;

//Ruta de clientes
Route::get('/clients', [ClientsController::class, 'index'])
    ->middleware('can:verClientes')
    ->name('clients') ;
Route::get('/clients/create', [ClientsController::class, 'create'])
    ->middleware('can:registrarCliente')
    ->name('clients.create') ;
Route::post('/clients/register', [ClientsController::class, 'store'])
    ->middleware('can:registrarCliente')
    ->name('clients.store') ;
Route::get('/clients/show/{id}', [ClientsController::class, 'show'])
    ->middleware('can:verClientes')
    ->name('clients.show') ;
Route::get('/clients/edit/{id}', [ClientsController::class, 'edit'])
    ->middleware('can:editarCliente')
    ->name('clients.edit') ;
Route::post('/clients/update/{id}', [ClientsController::class, 'update'])
    ->middleware('can:editarCliente')
    ->name('clients.update') ;
Route::post('/clients/delete/{id}', [ClientsController::class, 'destroy'])
    ->middleware('can:eliminarCliente')
    ->name('clients.destroy') ;

//Rutas de roles
Route::get('/roles', [RoleController::class, 'index'])
    ->name('roles') ;