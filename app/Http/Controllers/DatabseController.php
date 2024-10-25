<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabseController extends Controller
{
    //
    function select()
    {
        return DB::select('select * from users');
    }
}
