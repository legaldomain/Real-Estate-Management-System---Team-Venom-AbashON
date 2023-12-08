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

    //public function HomePropertyBuyRentList(){
       // $rentproperty = Property::where('property_status','rent')->get();
       // $buyproperty = Property::where('property_status','buy')->get();


      //  return view('frontend.property.property_list',compact('rentproperty','buyproperty'));

    //}// End Method

    public function RentProperty(){
        $property = Property::where('status','1')->where('property_status','rent')->get();
        return view('frontend.property.rent_property',compact('property'));
    }// End Method 

    public function BuyProperty(){
        $property = Property::where('status','1')->where('property_status','buy')->get();
        return view('frontend.property.buy_property',compact('property'));
    }// End Method 
    
    
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






