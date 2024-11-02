<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    //
    use HasFactory;
   protected $table = 'college_people';
   public $timestamps =false;
   function gett()
   {

    return "I am model of person";

   }

}
