<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginControllers@index');
Route::post('/login', 'App\Http\Controllers\LoginControllers@authenticate');

Route::get('/inventory', 'App\Http\Controllers\InventoryControllers@index');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/additems', 'App\Http\Controllers\AddItemsController@index');