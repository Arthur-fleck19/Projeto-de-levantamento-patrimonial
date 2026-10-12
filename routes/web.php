<?php

use Illuminate\Support\Facades\Route;

Route::view('/login', 'login');
Route::view('/locals', 'locals');
Route::get('/', function () {
    return view('welcome');
});
