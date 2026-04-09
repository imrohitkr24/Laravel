<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home route using controller
Route::get('/', [HomeController::class, 'index']);

// Simple pages
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Passing data to view
Route::get('/user', function () {
    return view('user')->with('name', 'Radhe radhe')->with('age', 22);
});

// Cookie routes
Route::get('/setcookie', function () {
    return response("Cookie Set")->cookie('name', 'Ali');
});

Route::get('/getcookie', function () {
    return request()->cookie('name');
});



Route::get('/first',function(){
    return redirect('/second');
});

Route::get('/second',function(){
    return"You are on second page";
});

use App\Http\Controllers\productController;
Route::get("admin/product",[productController::class,'index']);
Route::get("admin/about",[productController::class,'store']);

use App\Http\Controllers\AboutController;
Route::get('lpu/about', [AboutController::class, 'store']);




use App\Http\Controllers\product;
Route::resource('products', product::class);



//checkuserrole middleware
use App\Http\Middleware\CheckUserRole;
Route::get('/admin', function () {
    return "Welcome to dashboard";
})->middleware(CheckUserRole::class);    use 

//student controller

App\Http\Controllers\StudentController;

Route::get('/student/{id}', [StudentController::class, 'show']);