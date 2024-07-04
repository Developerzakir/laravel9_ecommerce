@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
      <!-- Content Header (Page header) -->
     

      <!-- Main content -->
      <section class="content">
        <div class="row">
            

            {{-- =====Add brand =====--}}
            <div class="col-12">
                <div class="box">
                     <div class="box-header with-border">
                         <h3 class="box-title">Update Brand</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('brand.update',$editBrand->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="id" value="{{$editBrand->id}}">
                                <input type="hidden" name="old_image" value="{{$editBrand->brand_image}}">

                                    <div class="form-group">
                                        <h5>Brand Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editBrand->brand_name_en}}" name="brand_name_en"  class="form-control"  > 
                                        </div>

                                        @error('brand_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5> Brand Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editBrand->brand_name_hin}}" name="brand_name_hin"  value="" class="form-control"  > 
                                        </div>
                                        @error('brand_name_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  

                                    <div class="form-group">
                                        <h5>Existing Brand Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                           <img src="{{asset($editBrand->brand_image)}}" style="width:60px; height:60px" alt="">
                                        </div>
                                       
                                    </div>  

                                    <div class="form-group">
                                        <h5>Upload New Brand Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="brand_image"  value="" class="form-control"  > 
                                        </div>
                                        @error('brand_image')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                        
                                    <div class="text-xs-right">
                                        
                                        <input type="submit" class="btn btn-rounded btn-primary" value="Update">
                                    </div>
                                </form>
                         </div>
                     </div>
                    <!-- /.box-body -->
                 </div>
                 <!-- /.box -->       
             </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>


@endsection