<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\BlogController;

//Frontend Routes
Route::get('/', function () {
    return view('welcome');
});

//Admin Routes
Route::group(['as'=>'admin.','prefix'=>'admin'],function(){
    Route::get('/dashboard', [AuthController::class,'dashboard'] );
    Route::resource('Blog',BlogController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

