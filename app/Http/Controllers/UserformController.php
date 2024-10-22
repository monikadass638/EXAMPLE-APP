<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserformController extends Controller
{
    //
    function addNewuser(Request $request)
    {
        echo $request->username;
        echo "<br/>";
        echo $request->email;
        echo "<br/>";
        echo $request->city;
        echo "<br/>";
        print_r( $request->skills);
        //return $request;;
    }
}
