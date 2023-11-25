<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\PropertyService;
use App\Models\Facilities;
use App\Models\PropertyType;
use App\Models\User;

class PropertyController extends Controller
{
    public function AllProperty(){

        $property = Property::latest()->get();
        return view('backend.property.all_property',compact('property'));

    } // End Method 

    public function AddProperty(){

        $propertytype = PropertyType::latest()->get();
        $facilities = Facilities::latest()->get();
        $activeAgent = User::where('status','active')->where('role','agent')->latest()->get();
        return view('backend.property.add_property',compact('propertytype','facilities','activeAgent'));

    }// End Method
}
