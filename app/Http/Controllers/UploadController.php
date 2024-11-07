<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request)
    {
        //return $request;
        $path = $request->file('pic')->store('public');
        return $path;
        //return "upload method called";
    }
}
