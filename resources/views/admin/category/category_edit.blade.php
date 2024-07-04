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
                         <h3 class="box-title">Update Category</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('category.update',$editCategory->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                {{-- <input type="hidden" name="id" value="{{$editCategory->id}}"> --}}
                              

                                    <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editCategory->category_name_en}}" name="category_name_en"  class="form-control"  > 
                                        </div>

                                        @error('category_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5> Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editCategory->category_name_hin}}" name="category_name_hin"  value="" class="form-control"  > 
                                        </div>
                                        @error('category_name_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
 

                                    <div class="form-group">
                                        <div class="form-group">
                                            <h5>Category Icon<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="category_icon"  value="{{$editCategory->category_icon}}" class="form-control"  > 
                                            </div>
                                            @error('category_icon')
                                            <span class="text-danger">{{$message}}</span> 
                                            @enderror
                                        </div>  
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