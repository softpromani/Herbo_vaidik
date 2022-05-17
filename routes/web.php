<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

//Frontend Routes
Route::get('/', function () {
    return view('welcome');
});

//Admin Routes
Route::get('/admin', [AuthController::class,'dashboard'] );
