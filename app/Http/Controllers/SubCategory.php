<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Models\SubCategory as ModelsSubCategory;

class SubCategory extends Controller
{
    public function subCategoryView()
    {
        $categories = Category::orderBy('category_name_en')->get();
        $subcategories = ModelsSubCategory::latest()->get();
        return view('admin.sub-category.subcat-view',compact('subcategories','categories'));

    } //end method

    public function subcategoryStore(Request $request)
    {
        $request->validate([
            'category_id' =>'required',
            'subcategory_name_en' =>'required',
            'subcategory_name_hin' =>'required',
        ]);

        ModelsSubCategory::insert([
            'category_id' =>$request->category_id,
            'subcategory_name_en' =>$request->subcategory_name_en,
            'subcategory_name_hin' =>$request->subcategory_name_hin,
            'subcategory_slug_en' =>strtolower(str_replace(' ','-',$request->subcategory_name_en)),
            'subcategory_slug_hin' =>str_replace(' ','-',$request->subcategory_name_hin),
           
        ]);

        return redirect()->route('all.subcategory')->with('success', 'Sub Category added successfully!');

    } //end method

    public function edit($id)
    {
        $categories = Category::orderBy('category_name_en')->get();
        $editSubCategory = ModelsSubCategory::findOrFail($id);
        return view('admin.sub-category.subcat-edit',compact('categories','editSubCategory'));

    }//end method

    public function update(Request $request)
    {
        // $request->validate([
        //     'category_id' =>'required',
        //     'subcategory_name_en' =>'required',
        //     'subcategory_name_hin' =>'required',
        // ]);

        $subcat_id = $request->id;
        ModelsSubCategory::findOrFail($subcat_id)->update([
          
        'category_id' =>$request->category_id,
        'subcategory_name_en' =>$request->subcategory_name_en,
        'subcategory_name_hin' =>$request->subcategory_name_hin,
        'subcategory_slug_en' =>strtolower(str_replace(' ','-',$request->subcategory_name_en)),
        'subcategory_slug_hin' =>str_replace(' ','-',$request->subcategory_name_hin),   

        ]);

        return redirect()->route('all.subcategory')->with('success', 'Sub Category Updated successfully!');
    } //end method

    public function destroy($id){
        $destroyBrand = ModelsSubCategory::findOrFail($id);
        $destroyBrand->delete();
    
        return redirect()->route('all.subcategory')->with('success', 'Sub Category Deleted!');
    } //end method


    ///////SuB SUB category /////////////
    public function subSubCategoryView()
    {

        $categories = Category::orderBy('category_name_en')->get();
        $subsubcategories = SubSubCategory::latest()->get();
        return view('admin.subsub-category.sub-sub-category',compact('subsubcategories','categories'));

    }//end method


    public function getSubCategory($category_id)
    {
        $subCat = ModelsSubCategory::where('category_id',$category_id)->orderBy('subcategory_name_en', 'ASC')->get();

        return json_encode($subCat);

    } //end method

    public function getSubSubCategory($subcategory_id)
    {
        $subsubCat = SubSubCategory::where('subcategory_id',$subcategory_id)->orderBy('subsubcategory_name_en', 'ASC')->get();

        return json_encode($subsubCat);

    } //end method

    public function subSubcategoryStore(Request $request)
    {
        $request->validate([
            'category_id' =>'required',
            'subcategory_id' =>'required',
            'subsubcategory_name_en' =>'required',
            'subsubcategory_name_hin' =>'required',
        ]);

        SubSubCategory::insert([
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'subsubcategory_name_en' =>$request->subsubcategory_name_en,
            'subsubcategory_name_hin' =>$request->subsubcategory_name_hin,
            'subsubcategory_slug_en' =>strtolower(str_replace(' ','-',$request->subsubcategory_name_en)),
            'subsubcategory_slug_hin' =>str_replace(' ','-',$request->subsubcategory_name_hin),
           
        ]);

        return redirect()->route('all.subsubcategory')->with('success', 'Sub Sub Category added successfully!');

    } //end method

    public function subsubcategoryedit($id)
    {
        $categories = Category::orderBy('category_name_en')->get();
        $subcategories = ModelsSubCategory::orderBy('subcategory_name_en')->get();
        $subsubcategories = SubSubCategory::findOrFail($id);

        return view('admin.subsub-category.sub-sub-category-edit',compact('categories','subcategories','subsubcategories'));

    } //end method

    public function subSubCategoryUpdate(Request $request)
    {
        $subsub_cat = $request->id;

        SubSubCategory::findOrFail($subsub_cat)->update([
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'subsubcategory_name_en' =>$request->subsubcategory_name_en,
            'subsubcategory_name_hin' =>$request->subsubcategory_name_hin,
            'subsubcategory_slug_en' =>strtolower(str_replace(' ','-',$request->subsubcategory_name_en)),
            'subsubcategory_slug_hin' =>str_replace(' ','-',$request->subsubcategory_name_hin),
           
        ]);

        return redirect()->route('all.subsubcategory')->with('success', 'Sub Sub Category Update successfully!');
    } //end method

    public function subSubCategorydestroy($id)
    {
        SubSubCategory::findOrFail($id)->delete();

        return redirect()->route('all.subsubcategory')->with('success', 'Sub Sub Category Deleted!');
    } //end method
}
