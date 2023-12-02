<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\PropertyService;
use App\Models\Facilities;
use App\Models\PropertyType;
use App\Models\User;





class IndexController extends Controller
{
    //

    public function PropertyDetails($id,$slug){

        $property = Property::findOrFail($id);

        $facilities = $property->facility_id;
        $property_fac = explode(',',$facilities);


        $multiImage = MultiImage::where('property_id',$id)->get();
        $distance = PropertyService::where('property_id',$id)->get();

         
        return view('frontend.property.property_details',compact('property','multiImage','property_fac','distance' ));



    } //end method
}
