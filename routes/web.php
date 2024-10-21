<?php

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
