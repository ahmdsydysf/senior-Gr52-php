<?php

use App\Http\Controllers\AccessorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompoController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\MailSendController;

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


Route::get('sendmail', [MailSendController::class , 'index']);
Route::get('accessor/{id}', [AccessorController::class , 'index']);
Route::get('test/compo', CompoController::class);
Route::resource('filemanager', FileManagerController::class);
