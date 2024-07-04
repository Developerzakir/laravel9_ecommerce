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
                         <h3 class="box-title">Update Sub Category</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('subcategory.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="id" value="{{$editSubCategory->id}}">


                                
                                <div class="form-group">
                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id"  class="form-control">
                                            <option value="1" disabled selected>Select Category</option>
                                            @foreach ($categories as $item) 
                                            <option value="{{$item->id}}" {{$item->id == $editSubCategory->category_id ? 'selected': ''}}>{{$item->category_name_en}}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror    
                                     </div>
                                </div>
                              

                                    <div class="form-group">
                                        <h5>Sub Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editSubCategory->subcategory_name_en}}" name="subcategory_name_en"  class="form-control"  > 
                                        </div>

                                        @error('subcategory_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5>Sub Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$editSubCategory->subcategory_name_hin}}" name="subcategory_name_hin"  value="" class="form-control"  > 
                                        </div>
                                        @error('subcategory_name_hin')
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