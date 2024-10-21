<?php

namespace App\Http\Controllers;

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
}
