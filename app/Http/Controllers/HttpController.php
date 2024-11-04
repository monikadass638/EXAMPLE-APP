<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
    //
    function login(Request $r)
    {
        echo $r->method();
        echo "<br>";
        echo $r->ip();
        echo "<br>";
        echo $r->url();
        echo "<br>";
        echo $r->user;
        echo $r->collect();

        //return $r;
    }
}
