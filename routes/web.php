<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NamerouteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestvariableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserformController;
use App\Http\Controllers\DatabseController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Product;
use App\Http\Middleware\CountryCheck;

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
Route::get('/apiuser' , [UserController::class , 'getapi']);


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

//route Group with Controller
Route::controller(StudentController::class)->group(function(){

Route::get('studentsave' ,'save');
Route::get('studentshow' , 'show');
Route::get('studentadd' ,'add');
Route::get('studentabout/{name}' ,'about');


});
//middleware group apply to route single
Route::view('middlewarehome','middleware.home')->middleware('M1');


//middleware apply to group of routes
Route::middleware('M1')->group(function(){
Route::view('middlewarehome','middleware.home');
Route::view('middlewareabout','middleware.about');

});

//middleware apply to direct routes
Route::view('middlewarecontact','middleware.contact')->middleware([Product::class , CountryCheck::class]);
Route::view('middlewareproduct','middleware.product')->middleware(CountryCheck::class);

//checking the database connection
Route::get('selectusers' , [DatabseController::class ,'select']);
Route ::get('person' ,[PersonController::class ,'getPerson']);


//Database queries
Route::get('dbdata',[DbController::class ,'index']);

//Databse queries with Model
Route::get('dbmodelquery' ,[PersonController::class , 'queries']);
//checkimg http request

Route::view('httpform' , 'http');
Route::Post('/formlogin' ,[HttpController::class , 'login']);

//Upload Image function
Route::view('upload','upload');
Route::post('/upload',[UploadController::class ,'upload']);


//add new client record
Route::view('client','add-client');
Route::post('client' ,[ClientController::class ,'add']);