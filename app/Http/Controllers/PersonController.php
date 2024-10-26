<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    function getPerson()
    {
        $call =  new \App\Models\Person;
        echo $call->gett();
        $user = \App\Models\Person::all();
        //return $user;

        return view('person',['data'=> $user]);
    }
}
