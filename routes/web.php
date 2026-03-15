<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/about', function(){
    return view('About');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/user', function(){
    return view('User')->with('name', 'Radhe radhe')->with('age',22);
});
Route::get('/setcookie',function(){
    return response("Cookie Set")->cookie('name','Ali');
});
Route::get('/getcookie',function(){
    return response("Cookie get")->cookie('name','Ali');
});