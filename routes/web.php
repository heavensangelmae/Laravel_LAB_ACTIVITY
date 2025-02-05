<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginControllers@index');
Route::post('/login', 'App\Http\Controllers\LoginControllers@authenticate');

Route::get('/inventory', 'App\Http\Controllers\InventoryControllers@index');