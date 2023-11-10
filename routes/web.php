<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/',[UserController::class,'OnShow']);

Route::post('/insert',[UserController::class,'OnInsert']);

Route::get('/login',[UserController::class,'OnLogin']);

Route::post('/OnLogin',[UserController::class,'CheckLogin']);

Route::get('/admin',[UserController::class,'OnAdmin'])->middleware('logincheck');

Route::get('/logout',[UserController::class,'OnLogout']);