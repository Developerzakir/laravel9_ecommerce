<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function CouponView(){
    	$cupons = Cupon::orderBy('id','DESC')->get();
    	return view('admin.cupon.view_cupon',compact('cupons'));
    } //end method

    public function CouponStore(Request $request){

    	$request->validate([
    		'coupon_name' => 'required',
    		'coupon_discount' => 'required',
    		'coupon_validity' => 'required',

    	]);

	Cupon::insert([
		'coupon_name' => strtoupper($request->coupon_name),
		'coupon_discount' => $request->coupon_discount, 
		'coupon_validity' => $request->coupon_validity,
		'created_at' => Carbon::now(),

    	]);

	    $notification = array(
			'message' => 'Coupon Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 

    public function CouponEdit($id){
        $coupons = Cupon::findOrFail($id);
           return view('admin.cupon.edit_cupon',compact('coupons'));
       }
   
   
       public function CouponUpdate(Request $request, $id){
   
         Cupon::findOrFail($id)->update([
           'coupon_name' => strtoupper($request->coupon_name),
           'coupon_discount' => $request->coupon_discount, 
           'coupon_validity' => $request->coupon_validity,
           'created_at' => Carbon::now(),
   
           ]);
   
           $notification = array(
               'message' => 'Coupon Updated Successfully',
               'alert-type' => 'info'
           );
   
           return redirect()->route('manage-coupon')->with($notification);
   
   
       } // end mehtod 
   
   
       public function CouponDelete($id){
   
           Cupon::findOrFail($id)->delete();
           $notification = array(
               'message' => 'Coupon Deleted Successfully',
               'alert-type' => 'info'
           );
   
           return redirect()->back()->with($notification);
   
       }

}
