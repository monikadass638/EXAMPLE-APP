<?php

namespace App\Http\Controllers;
use App\Models\Person;

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
    function queries()
    {
        //$userresult = Person::all();
        //return "I am query person";
        //$userresult = Person::get();
        //$userresult = Person::first();
        //$userresult = Person::where('id','2')->get();
        // $userresult = Person::insert([
        //     'name'=>'kay',
        //     'email' => 'kay@gmail.com',
        //     'city'=>'Sydney'
        // ]);
        // if($userresult)
        // {
        //     return "Data inserted succesfully";
        // }
        // else
        // {
        //     return "Data not inserted";
        // }
        // $userresult = Person::where('id' ,'6') ->delete();
        // if($userresult)
        // {
        //     return "Data deleted succesfully";
        // }
        //  else
        //  {
        //     return "Data not deleted";
        //  }
        $userresult = Person::where('id' ,'5') ->update([
            'name'=>'lopi',
        ]);
        if($userresult)
        {
            return "record updated succesfully";
        }
        else{
            return "record not updated";
        }
        // return $userresult;
    }
}
