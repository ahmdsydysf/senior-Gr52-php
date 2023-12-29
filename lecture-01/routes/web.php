<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('home/profile', function () {

    return view('main.welcome');

});

Route::get('/', function () {
    return view('main.welcome');
});

Route::get('data', function () {
    echo "my name is ahmed";
});
