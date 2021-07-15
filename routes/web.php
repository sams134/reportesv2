<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\MotorController;
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

//Route::get('clientes', [ClientesController::class,'index'])->name('clientes.index');



Route::get('/', function () {
    return view('auth.login');
});

// Clientes
Route::resource('clientes', ClientesController::class);

// Motores
Route::resource('motores', MotorController::class);
Route::get('motores/{id_cliente}/create', [MotorController::class,'create'])->name('motores.create_with_cliente');

//Ajax
Route::get('ajax/motores/contactoSelect/{id}', [AjaxController::class,'contactoSelect']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
