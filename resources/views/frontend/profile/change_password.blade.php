@extends('frontend.front_master')
@section('front')

    


<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br><br>
                <img class="card-img-top" src="{{(!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg')}}" style="width:100%; height:100%;" alt=""><br>
                <ul class="list-group list-group-flush">
                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{route('user.change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Hi.... </span>
                            <strong>{{Auth::user()->name}}</strong> 
                            Change Password
                    </h3>

                    <div class="card-body">
                        <form action="{{route('user.password.update')}}" method="post" >
                            @csrf 

                            <div class="row">
                                <div class="col-12">						
                                
                                        <div class="form-group">
                                            <h5>Current Password<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="old_password" id="current_password" value="" class="form-control"  > 
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <h5> New Password<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password" id="password" value="" class="form-control"  > 
                                            </div>
                                        </div>  
        
                                        <div class="form-group">
                                            <h5> Confirm Password<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control"  > 
                                            </div>
                                        </div>  
                                
                                </div>
                            
                            </div>

                            <div class="text-xs-right">
                            
                                <input type="submit" class="btn btn-rounded btn-primary" value="Update">
                            </div>

                         

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection