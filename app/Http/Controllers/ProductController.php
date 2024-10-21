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
        if(View::exists('product.login'))
        {
            return view('product.login');
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
