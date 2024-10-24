<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamerouteController extends Controller
{
    //
    function show()
    {
        //return view('named.home');
        //return redirect()->to('home/profile/user');
        return to_route('hm');
    }
}
