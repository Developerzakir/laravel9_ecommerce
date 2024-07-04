<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view', compact('adminData'));
    } //end method

    public function adminProfileEdit()
    {
        $adminEdit = Admin::find(1);
        return view('admin.admin_profile_edit', compact('adminEdit'));
    } //end method

    public function adminProfileStore(Request $request)
    {
        $Data = Admin::find(1);
        $Data->name  = $request->name;
        $Data->email = $request->email;

        if($request->file('profile_photo_path')){

            // Delete the old image if it exists
            if ($Data->profile_photo_path && file_exists(public_path('upload/admin_images/'.$Data->profile_photo_path))) {
                unlink(public_path('upload/admin_images/'.$Data->profile_photo_path));
            }

            //upload new image
            $file = $request->file('profile_photo_path');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$fileName);
            $Data['profile_photo_path'] = $fileName;
        }
        $Data->save();

        return redirect()->route('admin.profile')->with('success', 'Profile Updated Successfully!');
    }  //end method

    public function adminChangePassword()
    {
        return view('admin.admin_change_password');

    } //end method

    public function adminUpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' =>'required',
            'password'     =>'required|confirmed'
        ]);

        $hasedPassword = Admin::find(1)->password;
        if(Hash::check($request->old_password,$hasedPassword)){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        }else{
            return redirect()->back();
            
        }

    } //end method

}
