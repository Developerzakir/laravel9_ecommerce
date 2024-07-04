@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-full">
        
      <!-- Content Header (Page header) -->
     

      <!-- Main content -->
      <section class="content">
        <div class="row">
          

          <div class="col-8">
               <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sub Sub Category List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>SubCategory Name</th>
                                    <th>SubSubCategory Name English</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subsubcategories as $item)
                                <tr>
                                    <td>{{$item['category']['category_name_en']}}</td>
                                    <td>{{$item['subcategory']['subcategory_name_en']}}</td>
                                    <td>{{$item->subsubcategory_name_en}}</td>
                  
                                   
                                    <td width="30%">
                                        <a href="{{route('subsubcategory.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('subsubcategory.destroy', $item->id)}}" onclick="return confirm('are you sure want to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                         <h3 class="box-title">Add Sub Sub Category</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <div class="table-responsive">
                            <form action="{{route('subsubcategory.store')}}" method="POST">
                                @csrf 

                                    <div class="form-group">
                                        <h5>Category Select <span class="text-danger">*</span></h5>
                                           <div class="controls">
                                            <select name="category_id"  class="form-control">
                                                <option value="1" disabled selected>Select Category</option>
                                                @foreach ($categories as $item) 
                                                <option value="{{$item->id}}">{{$item->category_name_en}}</option>
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
                                               
                                            </select>

                                            @error('subcategory_id')
                                            <span class="text-danger">{{$message}}</span> 
                                            @enderror    
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Sub Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subsubcategory_name_en"  class="form-control"  > 
                                        </div>

                                        @error('subsubcategory_name_en')
                                        <span class="text-danger">{{$message}}</span> 
                                        @enderror
                                    </div>  
                                    <div class="form-group">
                                        <h5> Sub Sub Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subsubcategory_name_hin"  value="" class="form-control"  > 
                                        </div>
                                        @error('subsubcategory_name_hin')
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

{{--js code --}}

<script type="text/javascript">
$(document).ready(function(){
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id){
            $.ajax({
                url: "{{url('/category/subcategory/ajax')}}/"+category_id,
                type: 'GET',
                dataType: 'json',
                success:function(data){
                    var d = $('select[name="subcategory_id"]').empty();
                    $.each(data, function(key,value){
                        $('select[name="subcategory_id"]').append('<option value="'+value.id+'">' + value.subcategory_name_en+ '</option>');
                    });
                },
            });
        }else{
            alert('danger');
        }
    });

});

</script>






@endsection