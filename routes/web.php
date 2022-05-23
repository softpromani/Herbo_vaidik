<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontEnd\BlogController as FrontEndBlogController;
use App\Http\Controllers\FrontEnd\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;

//Frontend Routes
Route::get('/', function () {
    $blogs=Blog::latest()->take(3)->get();
    return view('welcome',['blogs'=>$blogs]);
});

// Blog 

Route::get('/Blog/{slug?}',[FrontEndBlogController::class,'showblog'])->name('singleBlog');

// Contact us frontend
Route::get('/contact-us',[ContactUsController::class,'index']);
Route::get('/enquiry-us',[ContactUsController::class,'index']);
Route::post('/contact',[ContactUsController::class,'contact']);




//Admin Routes
Route::group(['as'=>'admin.','prefix'=>'admin'],function(){
    Route::get('/dashboard', [AuthController::class,'dashboard'] );
    Route::resource('Blog',BlogController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

