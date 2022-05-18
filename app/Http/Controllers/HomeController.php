<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Models\Car as ModelsCar;

class HomeController extends Controller
{
    //
    public function showcar(){
        $car = ModelsCar::all();
        return view("index" , compact("ModelsCar")) ;
    }
}
