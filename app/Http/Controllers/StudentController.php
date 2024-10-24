<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return "I am a show method";
    }
    function save()
    {
        return "I am save method";
    }
    function add()
    {
        return "I am add function";
    }
    function about($name)
    {
        return $name;
    }
}
