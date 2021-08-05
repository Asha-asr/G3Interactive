<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Aircraft;
use App\Models\Part;

use Illuminate\Support\Facades\File;


class AircraftController extends Controller
{
    //

    public function showAircrafts(){

        $aircrafts = Aircraft::all();
        
        return view('add-job', ['aircrafts' => $aircrafts]);
    }
}
