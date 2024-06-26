<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UserController::class,'index']);

Route::get('/users/create', [UserController::class,'create']) ;

Route::post('/users/create', [UserController::class,'store']) ;

Route::get('/users/update/{id}', [UserController::class,'edit']) ;

Route::post('/users/update/{id}', [UserController::class,'update']) ;

Route::post('/users/delete/{id}', [UserController::class,'delete']) ;

Route::get('/products', [ProductController::class,'index']) ;

Route::get('/products/create', [ProductController::class,'create']) ;

Route::post('/products/create', [ProductController::class,'store']) ;

Route::get('/products/update/{id}', [ProductController::class,'edit']) ;

Route::post('/products/update/{id}', [ProductController::class,'update']) ;