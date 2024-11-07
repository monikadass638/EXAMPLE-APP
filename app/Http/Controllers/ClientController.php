<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    function add(Request $addstu)
    {
        $client = new Client();
        $client->name = $addstu->name;
        $client->email = $addstu->email;
        $client->phone = $addstu->phone;
        $client->save();
        if($client)
        {
            return  "new client has been added";
        }
        else{
            return  "there is a problem";
        }
        //return redirect()->to('client' ,['message'=> $mes]);
    }
}
