<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestvariableController extends Controller
{
    //
    function testvariable()
    {
        $name='GuruJi';
        $users =['Punit','Monika','Aarav','Anayra'];
        return view('testvariable' ,['name' => $name ,'users' =>$users ]);
    }
}
