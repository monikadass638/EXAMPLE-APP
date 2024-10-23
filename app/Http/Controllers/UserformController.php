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
            'city' =>'required |max:20 | min:5 | Uppercase',
            'skills' => 'required'
        ],[
            'username.required' => 'looks like username field is empty',
            'email.required' => 'Oh by mistake email field is empty whioch is required',
            'email.email' => '@ sign is missing in your email',
            'city.uppercase' => 'oh looks like city is not in uppercase'
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
