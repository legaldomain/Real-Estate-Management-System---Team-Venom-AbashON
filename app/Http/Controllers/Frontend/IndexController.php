<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\PropertyType; 
use App\Models\PropertyService;
use App\Models\Facilities;
use App\Models\User; 
use App\Models\PackagePlan;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyMessage;  
use Carbon\Carbon;
use App\Models\State;

class IndexController extends Controller
{
    
    public function PropertyDetails($id,$slug){

        $property = Property::findOrFail($id);

        $facilities = $property->facility_id;
        $property_fac = explode(',',$facilities);


        $multiImage = MultiImage::where('property_id',$id)->get();
        $distance = PropertyService::where('property_id',$id)->get();

         
        return view('frontend.property.property_details',compact('property','multiImage','property_fac','distance' ));



    } //end method
    
    
    public function BuyPropertySeach(Request $request){

        $request->validate(['search' => 'required']);
        $item = $request->search;
        $sstate = $request->state;
        $stype = $request->ptype_id;

   $property = Property::where('property_name', 'like' , '%' .$item. '%')->where('property_status','buy')->with('type','pstate')
        ->whereHas('pstate', function($q) use ($sstate){
            $q->where('state_name','like' , '%' .$sstate. '%');
        })
        ->whereHas('type', function($q) use ($stype){
            $q->where('type_name','like' , '%' .$stype. '%');
         })
        ->get();

        return view('frontend.property.property_search',compact('property'));

    }// End Method

}






