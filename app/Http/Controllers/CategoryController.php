<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryView()
    {
        $categories = Category::latest()->get();
        return view('admin.category.category_view',compact('categories'));

    } //end method

    public function categoryStore(Request $request)
    {

        $request->validate([
            'category_name_en' =>'required',
            'category_name_hin' =>'required',
            'category_icon' =>'required',
        ]);

        Category::insert([
            'category_name_en' =>$request->category_name_en,
            'category_name_hin' =>$request->category_name_hin,
            'category_icon' =>$request->category_icon,
            'category_slug_en' =>strtolower(str_replace(' ','-',$request->category_name_en)),
            'category_slug_hin' =>str_replace(' ','-',$request->category_name_hin),
           
        ]);

        return redirect()->route('all.category')->with('success', 'Category added successfully!');


    } //end method

    public function edit($id)
    {
        $editCategory = Category::findOrFail($id);
        return view('admin.category.category_edit',compact('editCategory'));

    }//end method

    public function update(Request $request,$id)
    {

       
     
        Category::findOrFail($id)->update([
            'category_name_en' =>$request->category_name_en,
            'category_name_hin' =>$request->category_name_hin,
            'category_icon' =>$request->category_icon,
            'category_slug_en' =>strtolower(str_replace(' ','-',$request->category_name_en)),
            'category_slug_hin' =>str_replace(' ','-',$request->category_name_hin),
        ]);

        return redirect()->route('all.category')->with('success', 'Category Updated successfully!');

    } //end method

    public function destroy($id){
        $destroyBrand = Category::findOrFail($id);
        $destroyBrand->delete();
    
        return redirect()->route('all.category')->with('success', 'Category Deleted!');
    }
}
