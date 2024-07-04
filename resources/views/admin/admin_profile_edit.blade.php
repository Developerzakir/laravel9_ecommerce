@extends('admin.admin_master')
@section('admin')

<div class="container-full">

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Admin Profile Update</h4>
             
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf 

                     <div class="row">
                       <div class="col-12">						
                        
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Username<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" value="{{$adminEdit->name}}" class="form-control" required="" > </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" value="{{$adminEdit->email}}" class="form-control" required="" > </div>
                                </div>
                            </div>
                          </div>
                          
                          
                           <div class="row pb-4">
                            <div class="col-md-6">
                                <label for="">Existing Image:</label><br>
                                <img id="showIMG" src="{{(!empty($adminEdit->profile_photo_path)) ? url('upload/admin_images/'.$adminEdit->profile_photo_path) : url('upload/no_image.jpg')}}" style="width:100px; height:100px;" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input id="image" type="file" name="profile_photo_path" class="form-control"> <div class="help-block"></div></div>
                                </div>
                            </div>
                           </div>
                          
                         
                          
                       </div>
                      
                     </div>
                     
                      
                       
                       <div class="text-xs-right">
                           
                           <input type="submit" class="btn btn-rounded btn-primary" value="Update">
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
 
</div>

{{-- Image preview before update --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){   //select image id
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showIMG').attr('src', e.target.result);
              //show image id after select
            }
            reader.readAsDataURL(e.target.files['0']);
        })

    });
    </script>
@endsection