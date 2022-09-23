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

Route::get('/', function () {
    return view('tacos/index');
});
Route::get('/Acerca de nosotros', function () {
    return view('tacos/acercade');
});
Route::get('/Contactanos', function () {
    return view('tacos/contactanos');
});
Route::get('/Paquete1', function () {
    return view('tacos/paquete1');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('tacos/index');
    })->name('dashboard');
});
