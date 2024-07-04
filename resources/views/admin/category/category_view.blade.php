@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
      <!-- Content Header (Page header) -->
     

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-8">
               <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Category List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Category English</th>
                                    <th>Category Hindi</th>
                                    <th>Category Icon</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                <tr>
                                    <td>{{$item->category_name_en}}</td>
                                    <td>{{$item->category_name_hin}}</td>
                                    <td>
                                        <span><i class="{{$item->category_icon}}"></i></span>
                                    </td>
                                    <td>
                                        <a href="{{route('category.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('category.destroy',$item->id)}}" onclick="return confirm('are you sure want to delete?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                            </table>
                        </div>
                    </div>
                   <!-- /.box-body -->
                </div>
                <!-- /.box -->       
            </div>

            {{-- =====Add brand =====--}}
            <div class="col-4">
                <div class="box">
                     <div class="box-header with-border">
                         <h3 class="box-title">Add Category</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('category.store')}}" method="POST">
                                @csrf 

                                    <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_en"  class="form-control"  > 
                                        </div>

                                        @error('category_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5> Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_hin"  value="" class="form-control"  > 
                                        </div>
                                        @error('category_name_hin')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  

                                    <div class="form-group">
                                        <h5>Category Icon<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_icon"  value="" class="form-control"  > 
                                        </div>
                                        @error('category_icon')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                        
                                    <div class="text-xs-right">
                                        
                                        <input type="submit" class="btn btn-rounded btn-primary" value="Save">
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