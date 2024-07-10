<?php

use App\http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/services', function () {
    return view('services');
});

route::get('users', [UserController::class,'index']);
route::get('users/create', [UserController::class,'create']);
route::post('users', [UserController::class,'store']);
route::get('users/{id}', [UserController::class,'show']);
route::get('users/{id}/edit', [UserController::class,'edit']);
route::get('users/{id}', [UserController::class,'update']);
route::get('users/{id}', [UserController::class,'destroy']);

