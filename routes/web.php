<?php

use Illuminate\Support\Facades\Route;

// $servicios = [];

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');

//Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller');
//Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller')->only('index', 'show');
//Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller')->except('index', 'show');

Route::resource('servicios', 'App\Http\Controllers\Servicios3Controller');


Route::view('contacto', 'contacto')->name('contacto');