<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\NamerouteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestvariableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserformController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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
//Adding New User

Route::view('/adduser', 'User.userform');
Route::post('/addnewuser' ,[UserformController::class , 'addNewuser']);
//getting current url previous url and full url
Route::view('/Urlhome','Url.home');
Route::view('/Urlhome/{name}','Url.home');
Route::view('/Urlabout','Url.about');
Route::view('/Urlcontact/{name}','Url.contact');
Route::view('/Urlcontact','Url.contact');


//Named URL
Route::view('home/profile/user','named.home')->name('hm');
Route::get('show' ,[NamerouteController::class ,'show']);

//Route Group Prefix
Route::prefix('student')->group(function(){
Route::view('/group','groupprefix');
Route::get('/save',[GroupController::class ,'save']);
Route::get('/show',[GroupController::class ,'show']);

});
Route::prefix('student/profile')->group(function(){
    Route::view('/group','groupprefix');
    Route::get('/save',[GroupController::class ,'save']);
    Route::get('/show',[GroupController::class ,'show']);
    
    });

