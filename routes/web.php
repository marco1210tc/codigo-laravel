<?php

use Illuminate\Support\Facades\Route;

$servicios = [
    ['titulo' => 'Servicio 01'],
    ['titulo' => 'Servicio 02'],
    ['titulo' => 'Servicio 03'],
    ['titulo' => 'Servicio 04'],
    ['titulo' => 'Servicio 05'],
];

// $servicios = [];

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('servicios', 'servicios', compact('servicios'))->name('servicios');
Route::view('contacto', 'contacto')->name('contacto');