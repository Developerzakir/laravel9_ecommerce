<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\District;
use App\Models\ShipState;
use App\Models\ShipDivision;
use Illuminate\Http\Request;

class ShippingAreaController extends Controller
{
    public function DivisionView(){
		$divisions = ShipDivision::orderBy('id','DESC')->get();
		return view('admin.ship.division.view_division',compact('divisions'));

	}


    public function DivisionStore(Request $request){

    	$request->validate([
    		'division_name' => 'required',   	 
    	]);


           ShipDivision::insert([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Division Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } // end method 

        public function DivisionEdit($id){

            $divisions = ShipDivision::findOrFail($id);
            return view('admin.ship.division.edit_division',compact('divisions'));
        }
          
          
          
        public function DivisionUpdate(Request $request,$id){
    
            ShipDivision::findOrFail($id)->update([
    
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),
    
            ]);
    
            $notification = array(
                'message' => 'Division Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('manage-division')->with($notification);
    
    
        } // end mehtod 
          
          
        public function DivisionDelete($id){
    
            ShipDivision::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Division Deleted Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method 


     //// Start Ship District 

    public function DistrictView(){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = District::with('division')->orderBy('id','DESC')->get();
        return view('admin.ship.district.view_district',compact('division','district'));
     }

    //// End Ship District

    public function DistrictStore(Request $request){

    	$request->validate([
    		'division_id' => 'required',  
    		'district_name' => 'required',  	 

    	]);


	 District::insert([

		'division_id' => $request->division_id,
		'district_name' => $request->district_name,
		'created_at' => Carbon::now(),

    	]);

	    $notification = array(
			'message' => 'District Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 



      public function DistrictEdit($id){
            $division = ShipDivision::orderBy('division_name','ASC')->get();
            $district = District::findOrFail($id);
            return view('admin.ship.district.edit_district',compact('district','division'));
       }




    public function DistrictUpdate(Request $request,$id){

    	District::findOrFail($id)->update([

		'division_id' => $request->division_id,
		'district_name' => $request->district_name,
		'created_at' => Carbon::now(),

    	]);

	    $notification = array(
			'message' => 'District Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-district')->with($notification);
       } // end mehtod 

      public function DistrictDelete($id){

    	District::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'District Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 

    ////////////District end ///////////////



    ////////////////// Ship State //////////

    public function StateView(){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = District::orderBy('district_name','ASC')->get();
        $state = ShipState::orderBy('id','DESC')->get();
        return view('admin.ship.state.view_state',compact('division','district','state'));
    }

    public function StateStore(Request $request){

    	$request->validate([
    		'division_id' => 'required',  
    		'district_id' => 'required', 
    		'state_name' => 'required', 	 
    	]);


	   ShipState::insert([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => $request->state_name,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'State Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method 


    public function StateEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = District::orderBy('district_name','ASC')->get();
        $state = ShipState::findOrFail($id);
        return view('admin.ship.state.edit_state',compact('division','district','state'));
    } //end method

    public function StateUpdate(Request $request,$id){

    	ShipState::findOrFail($id)->update([

		'division_id' => $request->division_id,
		'district_id' => $request->district_id,
		'state_name' => $request->state_name,
		'created_at' => Carbon::now(),

    	]);

	    $notification = array(
			'message' => 'State Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-state')->with($notification);


    } // end mehtod 


    public function StateDelete($id){

    	ShipState::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'State Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
    
    
    
    
    
        //////////////// End Ship State ////////////
    
    
       

    
}
