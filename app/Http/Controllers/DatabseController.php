<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabseController extends Controller
{
    //
    function select()
    {
        $re = DB::select('select * from users');
        return view('User.userselect' ,['name'=> $re]);
    }
}
