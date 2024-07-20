<?php

use Dotenv\Util\Regex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

// $servicios = [];
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('servicios', 'App\Http\Controllers\ServiciosController')
  ->names('servicios');
  // ->middleware('auth');

Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('contacto', 'contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store')->name('contacto.store');

// Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('servicios.index');
// Route::get('servicios/crear', 'App\Http\Controllers\ServiciosController@create')->name('servicios.create');
// Route::get('servicios/{id}/editar', 'App\Http\Controllers\ServiciosController@edit')->name('servicios.edit')->where('id','[0-9]+');
// Route::patch('servicios/{id}', 'App\Http\Controllers\ServiciosController@update')->name('servicios.update');
// Route::post('/servicios', 'App\Http\Controllers\ServiciosController@store')->name('servicios.store');
// Route::get('servicios/{id}', 'App\Http\Controllers\ServiciosController@show')->name('servicios.show')->where('id','[0-9]+');
// Route::delete('servicios/{servicio}', 'App\Http\Controllers\ServiciosController@destroy')->name('servicios.destroy');
