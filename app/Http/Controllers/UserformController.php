<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserformController extends Controller
{
    //
    function addNewuser(Request $request)
    {
        //validation for fields
        $request->validate([
            'username'=>'required',
            'email' => 'required | email',
            'city' =>'required |max:20 | min:5',
            'skills' => 'required'
        ]);
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
