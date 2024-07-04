@extends('admin.admin_master')
@section('admin')

<div class="container-full">

   
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Admin Password Update</h4>
                    
                  </div>
           
           <div class="box-body">
                <div class="col">
                    <form action="{{route('admin.password.update')}}" method="POST">
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
    </section>
</div>

@endsection