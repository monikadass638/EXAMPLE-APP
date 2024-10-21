<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestvariableController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about' , function () {
    return view('about');
});
Route::view('/contact' ,'contact');

Route::get('/value/{name}' , function ($name) {
    echo $name;
    return view('value',['name' => $name]);

});
Route::redirect('/home','/');
Route::get('/user' , [UserController::class , 'getUser']);

Route::get('/username/{name}',[UserController::class,'userName']);
Route::view('/product','product');

//Calling the product View 
Route::get('/product' ,[ProductController::class , 'index']);
Route::get('/product-login' ,[ProductController::class ,'productlogin']);
Route::get('/product-data/{data}' ,[ProductController::class ,'productdata']);

//Testing Variable in blade template
Route::get('/testvariable',[TestvariableController::class ,'testvariable']);
