<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Aircraft;
use App\Models\Part;

use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    //

    public function show(){

        $customers = Customer::all();
        $crafts = Aircraft::all();
        $craftparts = Part::all();
        return view('add-job', ['customers' => $customers], ['crafts' => $crafts], ['craftparts' => $craftparts] );
        
    }

    public function store(Request $request){
            $part = new Part;
            $part->part_no = $request->partnumber;
            $part->part_description = $request->partdescription;
            $part->save();
            echo "Parts Added";
    }

   

    
}
