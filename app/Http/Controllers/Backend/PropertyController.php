<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\Property;



class PropertyController extends Controller
{
    // 
    public function AllProperty(){


        $property = Property::latest()->get();
        return view('backend.property.all_property',compact('property'));




    }//endmethod



    public function AddProperty(){

        return view('backend.property.add_property');








    }//endmethod

    





}
