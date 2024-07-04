<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\MultiImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('status',1)->orderBy('id','DESC')->limit(6)->get();
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(3)->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $featured = Product::where('featured',1)->orderBy('id','DESC')->limit(6)->get();
        $hot_deals = Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();
        $special_offer = Product::where('special_offer',1)->orderBy('id','DESC')->limit(3)->get();
        $special_deals = Product::where('special_deals',1)->orderBy('id','DESC')->limit(3)->get();

        $skip_category_0 = Category::skip(0)->first();
    	$skip_product_0 = Product::where('status',1)->where('category_id',$skip_category_0->id)->orderBy('id','DESC')->get();

        $skip_category_1 = Category::skip(1)->first();
    	$skip_product_1 = Product::where('status',1)->where('category_id',$skip_category_1->id)->orderBy('id','DESC')->get();

    	$skip_brand_1 = Brand::skip(1)->first();
    	$skip_brand_product_1 = Product::where('status',1)->where('brand_id',$skip_brand_1->id)->orderBy('id','DESC')->get();

        return view('frontend.index', compact('categories','sliders','products','featured','hot_deals','special_offer','special_deals','skip_category_0','skip_product_0','skip_category_1','skip_product_1','skip_brand_1','skip_brand_product_1'));
        
        // return view('frontend.index', compact('categories','sliders','products','featured','hot_deals','special_offer','special_deals','skip_category_0','skip_product_0','skip_category_1','skip_product_1','skip_brand_1','skip_brand_product_1'));

    } //end method

    public function ProductDetails($id,$slug){
		$product = Product::findOrFail($id);
        $multiImag = MultiImg::where('product_id',$id)->get();
        $hot_deals = Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();

        $color_en = $product->product_color_en;
		$product_color_en = explode(',', $color_en);

		$color_hin = $product->product_color_hin;
		$product_color_hin = explode(',', $color_hin);

		$size_en = $product->product_size_en;
		$product_size_en = explode(',', $size_en);

		$size_hin = $product->product_size_hin;
		$product_size_hin = explode(',', $size_hin);

        $cat_id = $product->category_id;
		$relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();

	 	return view('frontend.product.product_details',compact('product','multiImag','hot_deals',
        'product_color_en','product_color_hin','product_size_en','product_size_hin','relatedProduct'));

	}

    public function TagWiseProduct($tag){
		$products = Product::where('status',1)->where('product_tags_en',$tag)->orderBy('id','DESC')->paginate(3);
        $categories = Category::orderBy('category_name_en','ASC')->get();
		// $products = Product::where('status',1)->where('product_tags_en',$tag)->where('product_tags_hin',$tag)->orderBy('id','DESC')->get();
		return view('frontend.tags.tags_view',compact('products','categories'));
	}

    // Subcategory wise data
	public function SubCatWiseProduct($subcat_id,$slug){
		$products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->paginate(3);
		$categories = Category::orderBy('category_name_en','ASC')->get();
		return view('frontend.product.subcategory_view',compact('products','categories'));
	}

    // Sub-Subcategory wise data
	public function SubSubCatWiseProduct($subsubcat_id,$slug){
		$products = Product::where('status',1)->where('subsubcategory_id',$subsubcat_id)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name_en','ASC')->get();
		return view('frontend.product.sub_subcategory_view',compact('products','categories'));
	}



    public function userLogout()
    {
        Auth::logout();

        return redirect()->route('login');

    } //end method

    public function userProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('frontend.profile.user_profile', compact('user'));
    } //end method

    public function userProfileStore(Request $request)
    {
        $Data = User::find(Auth::user()->id);
        $Data->name  = $request->name;
        $Data->email = $request->email;
        $Data->phone = $request->phone;

        if($request->file('profile_photo_path')){

            // Delete the old image if it exists
            if ($Data->profile_photo_path && file_exists(public_path('upload/user_images/'.$Data->profile_photo_path))) {
                unlink(public_path('upload/user_images/'.$Data->profile_photo_path));
            }

            //upload new image
            $file = $request->file('profile_photo_path');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$fileName);
            $Data['profile_photo_path'] = $fileName;
        }
        $Data->save();

        return redirect()->route('dashboard')->with('success', 'User Profile Updated Successfully!');

    }//end method

    public function userChangePassword()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.change_password', compact('user'));

    } //end method

    public function userUpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' =>'required',
            'password'     =>'required|confirmed'
        ]);

        $hasedPassword = Auth::user()->password;
        if(Hash::check($request->old_password,$hasedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }else{
            return redirect()->back();
            
        }

    } //end method

}
