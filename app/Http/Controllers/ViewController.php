<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

//Use the view controller when there is basic logic needed to serve up one view over another
class ViewController extends Controller
{
    public function dashboard()
    {
      //If the user is a breeder, return the breeder dashboard
      
      //If the user is a buyer, return the buyer dashboard

      return View::make('dashboard');
    }
}
