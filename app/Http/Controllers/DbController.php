<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DbController extends Controller
{
    //
    function index()
    {
        $res = DB::table('users')->get();
        //$res = DB::table('users')->where('password','1234')->get();
       // $res = DB::table('users')->first();
        // $res = DB::table('users')->insert([
        //     'name'=>'Suman',
        //     'email'=>'Suman@gmail.com',
        //     'Password' =>'12345',
        // ]);
        // if($res)
        // {
        //         return "Data Inserted";
        // }
        // else
        // {
        //     return "Data not inserted";
        // }
        // $res = DB::table('users')->where('password' ,'12345')->update(['password' => '1234']);
        // if($res)
        // {
        //     return "data updated succesfully";
        // }
        // else
        // {
        //     return "data not updated";
        // }
        // $res =DB::table('users')->where('name','Kuku')->delete();
        // if($res)
        // {
        //     return "data deleted succesfully";
        // }
        // else
        // {
        //     return "data not deleted";
        // }
        

        //$res=[$res];
        return view('db' ,['data' => $res]);
        //return $res;
    }
}
