<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser()
    {
        return "Hello My name is User Monika";
    }
    function userName($name)
    {
        echo "My name is Monika ".$name;
        return view('User.user' ,['name' => $name]);
    }
    function getapi()
    {
        $res=Http::get('https://jsonplaceholder.typicode.com/users/1/');

        return view('User.user' ,['data'=> json_decode($res->body())]);
    }
   
}
