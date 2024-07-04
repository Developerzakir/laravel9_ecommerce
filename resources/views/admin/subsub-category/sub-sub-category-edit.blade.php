@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-full">
        
      <!-- Content Header (Page header) -->
     

      <!-- Main content -->
      <section class="content">
        <div class="row">
         

            {{-- =====Update Sub Sub Category =====--}}
            <div class="col-12">
                <div class="box">
                     <div class="box-header with-border">
                         <h3 class="box-title">Update Sub Sub Category</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('subsubcategory.update')}}" method="POST">
                                @csrf 

                                <input type="hidden" name="id" value="{{$subsubcategories->id}}">

                                    <div class="form-group">
                                        <h5>Category Select <span class="text-danger">*</span></h5>
                                           <div class="controls">
                                            <select name="category_id"  class="form-control">
                                                <option value="1" disabled selected>Select Category</option>
                                                @foreach ($categories as $item) 
                                                <option value="{{$item->id}}" {{$item->id == $subsubcategories->category_id ? 'selected': ''}}>{{$item->category_name_en}}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                            <span class="text-danger">{{$message}}</span> 
                                            @enderror    
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Category Select <span class="text-danger">*</span></h5>
                                           <div class="controls">
                                            <select name="subcategory_id"  class="form-control">
                                                <option value="1" disabled selected>Select Sub Category</option>
                                                @foreach ($subcategories as $item) 
                                                <option value="{{$item->id}}" {{$item->id == $subsubcategories->subcategory_id ? 'selected': ''}}>{{$item->subcategory_name_en}}</option>
                                                @endforeach
                                               
                                            </select>

                                            @error('subcategory_id')
                                            <span class="text-danger">{{$message}}</span> 
                                            @enderror    
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Sub Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subsubcategory_name_en" 
                                            value="{{$subsubcategories->subsubcategory_name_en}}"  class="form-control"  > 
                                        </div>

                                        @error('subsubcategory_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5> Sub Sub Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subsubcategory_name_hin" 
                                            value="{{$subsubcategories->subsubcategory_name_hin}}" class="form-control"  > 
                                        </div>
                                        @error('subsubcategory_name_hin')
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