<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        return view('product');
    }
    
    function productlogin()
    {
        if(View::exists('product.signup'))
        {
            return view('product.signup');
        }
        else
        {
            echo "No view found";
        }
    }
    function productdata($data)
    {
        return view('product.productdata' ,['data' => $data]);
    }
}
