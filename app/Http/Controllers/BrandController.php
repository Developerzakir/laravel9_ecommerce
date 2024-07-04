<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function brandView()
    {
        $brandAll = Brand::latest()->get();
        return view('admin.brand.brand_view',compact('brandAll'));
    } //end method

    public function brandStore(Request $request)
    {
        $request->validate([
            'brand_name_en' =>'required',
            'brand_name_hin' =>'required',
            'brand_image' =>'required',
        ]);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

        Brand::insert([
            'brand_name_en' =>$request->brand_name_en,
            'brand_name_hin' =>$request->brand_name_hin,
            'brand_slug_en' =>strtolower(str_replace(' ','-',$request->brand_name_en)),
            'brand_slug_hin' =>str_replace(' ','-',$request->brand_slug_hin),
            'brand_image' => $save_url
        ]);

        return redirect()->route('all.brand')->with('success', 'Brand added successfully!');

    } //end method

    public function edit($id)
    {
        $editBrand = Brand::findOrFail($id);
        return view('admin.brand.brand_edit',compact('editBrand'));

    }//end method

    public function update(Request $request)
    {
        $brand_id = $request->id;
        $old_image= $request->old_image;

        if($request->file('brand_image')){
            unlink($old_image);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
            $save_url = 'upload/brand/'.$name_gen;
    
            Brand::findOrFail($brand_id)->update([
                'brand_name_en' =>$request->brand_name_en,
                'brand_name_hin' =>$request->brand_name_hin,
                'brand_slug_en' =>strtolower(str_replace(' ','-',$request->brand_name_en)),
                'brand_slug_hin' =>str_replace(' ','-',$request->brand_slug_hin),
                'brand_image' => $save_url
            ]);
    
            return redirect()->route('all.brand')->with('success', 'Brand Updated successfully!');


        }else{

            Brand::findOrFail($brand_id)->update([
                'brand_name_en' =>$request->brand_name_en,
                'brand_name_hin' =>$request->brand_name_hin,
                'brand_slug_en' =>strtolower(str_replace(' ','-',$request->brand_name_en)),
                'brand_slug_hin' =>str_replace(' ','-',$request->brand_slug_hin),
                
            ]);
    
            return redirect()->route('all.brand')->with('success', 'Brand Updated successfully!');

        }

    } //end method

    public function destroy($id){
        $destroyBrand = Brand::findOrFail($id);
        $img = $destroyBrand->brand_image;
        unlink($img);

        Brand::findOrFail($id)->delete();

        return redirect()->route('all.brand')->with('success', 'Brand Deleted!');

    }
}
