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
            return  redirect('list-client');
        }
        else{
            return  "there is a problem";
        }
        //return redirect()->to('client' ,['message'=> $mes]);
    }

    function list()
    {
        $clients= Client::all();
        return view('list-client',['data'=>$clients]);
    }
    function delete($id)
    {
        $isDeleted = Client::destroy($id);
        if($isDeleted)
        {
            return redirect('list-client');
        }
    }
}
