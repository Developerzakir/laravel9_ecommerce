<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    public function viewSlider()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.slider_view', compact('sliders'));

    } //end method

    public function storeSlider(Request $request)
    {
        $request->validate([

    		'slider_img' => 'required',
    	],[
    		'slider_img.required' => 'Plz Select One Image',

    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(870,370)->save('upload/slider/'.$name_gen);
    	$save_url = 'upload/slider/'.$name_gen;

	Slider::insert([
		'title' => $request->title,
		'description' => $request->description,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } //end method

    public function editSlider($id)
    {
        $sliders = Slider::findOrFail($id);
		return view('admin.slider.slider_edit',compact('sliders'));

    } //end method

    public function updateSlider(Request $request)
    {
        $slider_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(870,370)->save('upload/slider/'.$name_gen);
    	$save_url = 'upload/slider/'.$name_gen;

	Slider::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('view.slider')->with($notification);

    	}else{

    	Slider::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,


    	]);

	    $notification = array(
			'message' => 'Slider Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('view.slider')->with($notification);

    	} // end else 

    } //end method

    public function sliderDelete($id)
    {
        $slider = Slider::FindOrFail($id);

         // Extract the image paths from the URLs
         $img_one_path = parse_url($slider->slider_img, PHP_URL_PATH);

         // Delete the images from the file system
        if (File::exists($img_one_path)) {
            File::delete($img_one_path);
        }

         $slider->delete();

     
         $notification = array(
             'message' => 'Slider Delected!',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);

    } //end method

    public function SliderInactive($id){
    	Slider::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderActive($id){
    	Slider::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
